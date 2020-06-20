<template>
    <div class="contact-forms">
        <!--  -->
        <div class="item">
            <div class="icon" :style="'point' | setBgImagePath"></div>
            <div class="text">
                ul. Kochanowskiego 42 <br />
                34-100 Wadowice <br />
                woj. małopolskie
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon" :style="'phone' | setBgImagePath"></div>
            <div class="text">
                (33)873-18-27- Recepcja <br />
                697-280-553- Administracja <br />
                695-727-833- Administracja
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon" :style="'mail' | setBgImagePath"></div>
            <div class="text">
                stowarzyszenie@dacszanse.pl <br />
                www.dacszasne.pl
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon" :style="'clock' | setBgImagePath"></div>
            <div class="text">
                Godziny pracy: <br />
                poniedziałek-piątek 7:30-15:30
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon"></div>
            <div class="text">
                Bank Pekao SA o/Wadowice <br />
                89 1240 4197 1111 0000 46 92 9350
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon"></div>
            <div class="text">
                Bank Alior Bank o/Wadowice <br />
                60 2490 0005 0000 4530 8455 3611
            </div>
        </div>
    </div>
</template>
<script>
export default {
    filters: {
        setBgImagePath(path) {
            return `background-image: url('/images/contact/${path}.png')`;
        }
    }
};
</script>
