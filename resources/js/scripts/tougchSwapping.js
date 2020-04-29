//VARIABLES DESCRIPTION
//
// that- access to VueComponent data via this
//
// methodIfRight/Left- function that will be load if user would swap right/left
//
// initValue- value that describes the positionX of user first interaction with element
//
// element- element that will have added events
export const tougchSwapping = API => {
    //Validation
    ["that", "methodIfRight", "methodIfLeft", "initValue", "element"].forEach(property => {
        if (!API.hasOwnProperty(property))
            throw new Error(`\n\n[ TougchSwapping ERROR in function tougchSwapping ]:\nObject given as function param requires "${property}" property`);
        else
            ["methodIfRight", "methodIfLeft"].forEach(func => {
                if (typeof API[func] !== "function") throw new Error(`\n\n[ TougchSwapping ERROR in function tougchSwapping ]:\n'${func}' has to be a function!`);
            });
    });
    const { methodIfRight, methodIfLeft, initValue, element, that } = API;
    //
    //INIT
    element.addEventListener("touchstart", e => (that[initValue] = e.changedTouches[0].clientX));
    element.addEventListener("mousedown", e => (that[initValue] = e.x));
    //
    const handleImageSwap = e => {
        const init = that[initValue];
        //
        let x;
        try {
            //Tougch event case
            x = e.changedTouches[0].clientX;
        } catch (error) {
            //Mouse event case
            x = e.x;
        }
        //
        //Right case
        if (x - init < -120) methodIfRight();
        //Left case
        else if (x - init > 120) methodIfLeft();
    };
    //
    ["touchend", "mouseup"].forEach(event => API.element.addEventListener(event, handleImageSwap));
    //
};
