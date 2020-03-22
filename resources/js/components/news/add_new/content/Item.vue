<!-- -->
<!-- -->
<!--        THIS IS ONE SINGLE NEWS CONTENT ITEM COMPONENT-->
<!-- -->
<!-- -->
<template>
    <div class="content-item" :class="active ? 'active' : ''">
        <div class="header">
            <h3 v-text="translateType(data.type)"></h3>
            <div class="buttons-wrapper">
                <button v-if="data.type == 'list'" @click="addItemToContentList" class="grey-btn small">Dodaj do listy</button>
                <button class="grey-btn" @click="$emit('setEditingItem', data.id)"><i class="fa fa-cog"></i></button>
                <button class="grey-btn delete" @click="$emit('deleteItemFromContent', data.id)"><i class="fa fa-trash-o"></i></button>
            </div>
        </div>
        <div class="body">
            <textarea v-if="data.type == 'textarea'" v-model="data.content" class="item" rows="5"></textarea>

            <textarea v-if="data.type == 'header'" v-model="data.content" class="item" rows="3"></textarea>

            <div v-if="data.type == 'list'" class="item list-wrapper">
                <div class="list-item" v-for="(item, index) in data.content" :key="item.id">
                    <span v-text="index + 1 + '.'"></span>
                    <input v-model="item.content" type="text" />
                    <button @click="changeItemInListOrder('up', index)" class="grey-btn"><i class="fa fa-chevron-up"></i></button>
                    <button @click="changeItemInListOrder('down', index)" class="grey-btn"><i class="fa fa-chevron-down"></i></button>
                    <button @click="data.content.splice(index, 1)" class="grey-btn delete"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!--  -->
        </div>
        <div class="footer">
            <span class="wrapper"><span>Pogrubione:</span> <i :class="data.bold ? 'fa fa-check' : 'fa fa-times'"></i></span>
            <span class="wrapper"><span>Kursywa:</span> <i :class="data.italic ? 'fa fa-check' : 'fa fa-times'"></i></span>
            <span class="wrapper"><span>Kolor: </span><span class="color" :style="`background-color: ${data.color}`"></span></span>
            <span class="wrapper"><span>Rozmiar</span><span class="size" v-text="`${data.size}px`"></span></span>
        </div>
        <hr />
    </div>
</template>
<script>
export default {
    props: ["data", "active"],
    methods: {
        translateType(val) {
            const translated = {
                header: "Nagłówek",
                textarea: "Pole tekstowe",
                list: "Lista"
            };
            return translated[val];
        },
        //
        //
        //
        addItemToContentList(itemId) {
            const value = this.data.content;
            const len = value.length;
            //
            let id;
            try {
                id = value[len - 1].id + 1;
            } catch (e) {
                id = 0;
            }
            //
            value.push({
                content: "",
                id: id
            });
        },
        //
        //
        //
        changeItemInListOrder(order, index) {
            const len = this.data.content.length;
            const { content } = this.data;
            //
            //Return cases
            const thereIsOnlyOneElementInList = len === 1;
            const firstItemInListWantsToMoveUp = order === "up" && index === 0;
            const lastItemInListWantsToMoveDown = order === "down" && index === len - 1;
            //
            if (thereIsOnlyOneElementInList || firstItemInListWantsToMoveUp || lastItemInListWantsToMoveDown) return;

            //
            const el = Object.assign({}, content[index]);
            //
            if (order === "up") {
                //
                const prev = Object.assign({}, content[index - 1]);
                //
                for (let item in el) content[index - 1][item] = el[item];
                for (let item in prev) content[index][item] = prev[item];
                //
            } else if (order === "down") {
                //
                const next = Object.assign({}, content[index + 1]);
                //
                for (let item in el) content[index + 1][item] = el[item];
                for (let item in next) content[index][item] = next[item];
                //
            }
        }
    }
};
</script>
