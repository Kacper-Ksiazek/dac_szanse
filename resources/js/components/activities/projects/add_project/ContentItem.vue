<template>
    <div class="content-item">
        <div class="header">
            <h3 v-text="translateType(data.type)"></h3>
            <button v-if="data.type == 'list'" @click="addItemToList">Dodaj do listy</button>
        </div>
        <!--  -->
        <div class="body">
            <textarea v-if="data.type == 'textarea'" v-model="data.content" class="item" rows="5"></textarea>

            <textarea v-if="data.type == 'header'" v-model="data.content" class="item" rows="3"></textarea>

            <div v-if="data.type == 'list'" class="item list-wrapper">
                <div class="list-item" v-for="(item, index) in value" :key="item.id">
                    <span v-text="index + 1 + '.'"></span>
                    <input v-model="item.content" type="text" />
                    <button @click="changeItemOreder(item.id, 'up')"><i class="fa fa-chevron-up"></i></button>
                    <button @click="changeItemOreder(item.id, 'down')"><i class="fa fa-chevron-down"></i></button>
                    <button @click="deleteItemFromList(item.id)" class="delete"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!--  -->
            <div class="item-control">
                <!-- Up arrow -->
                <button @click="$emit('changeOrder', data.id, 'up')"><i class="fa fa-arrow-up"></i></button>
                <!-- Down arrow -->
                <button @click="$emit('changeOrder', data.id, 'down')"><i class="fa fa-arrow-down"></i></button>
                <!-- Delete button -->
                <button @click="$emit('delete', data.id)" class="delete"><i class="fa fa-trash-o"></i></button>
            </div>
        </div>
        <hr />
    </div>
</template>
<script>
export default {
    props: ["data"],
    data() {
        return {
            value: this.data.content
        };
    },
    methods: {
        translateType(val) {
            const translated = {
                header: "Nagłówek",
                textarea: "Pole tekstowe",
                list: "Lista"
            };
            return translated[val];
        },
        addItemToList() {
            const len = this.value.length;
            //
            let id;
            try {
                id = this.value[len - 1].id + 1;
            } catch (e) {
                id = 0;
            }
            //
            this.value.push({
                content: "",
                id: id
            });
        },
        deleteItemFromList(id) {
            this.value.splice(this.findListItemIndexViaId(id), 1);
        },
        changeItemOreder(id, order) {
            const len = this.value.length;
            //
            //Return cases
            const thereIsOnlyOneElementInList = len === 1;
            const firstItemInListWantsToMoveUp = order === "up" && this.findListItemIndexViaId(id) === 0;
            const lastItemInListWantsToMoveDown = order === "down" && this.findListItemIndexViaId(id) === len - 1;
            //
            if (thereIsOnlyOneElementInList || firstItemInListWantsToMoveUp || lastItemInListWantsToMoveDown) return;
            //
            if (order === "up") {
                const index = this.findListItemIndexViaId(id),
                    el = this.value[index].content,
                    prev = this.value[index - 1].content;
                //
                this.value[index].content = prev;
                this.value[index - 1].content = el;
            } else if (order === "down") {
                const index = this.findListItemIndexViaId(id),
                    el = this.value[index].content,
                    next = this.value[index + 1].content;
                //
                this.value[index].content = next;
                this.value[index + 1].content = el;
            }
        },
        findListItemIndexViaId(id) {
            let result;
            this.value.forEach((item, index) => {
                if (item.id == id) result = index;
            });
            return result;
        }
    },
    watch: {
        value(val) {
            this.data.content = val;
        }
    }
};
</script>
