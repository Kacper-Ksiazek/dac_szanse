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
                poniedziałek-piątek 8:00-17:00
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
        <!--  -->
        <div class="item">
            <i class="fa fa-facebook-square"></i>
            <div class="text">
                <a href="https://www.facebook.com/stowarzyszeniedacszanse/" target="blank">Zobacz nas na Facebooku</a>
            </div>
        </div>
        <!--  -->
        <div class="item">
            <div class="icon" :style="'phone' | setBgImagePath"></div>
            <div class="text">
                Administracja Biura Stowarzyszenia "Dać Szansę" <br />
                tel. (33) 873-18-27 <br />
                tel. 697-280-553 <br />
                tel. 695-727-833 <br /><br />

                Niepubliczna Specjalistyczna Poradnia Psychologiczno – Pedagogiczna w Wadowicach <br />
                tel. 608 822 852 <br /><br />

                Niepubliczny Punkt Przedszkolny „Dać Szansę” <br />
                tel. 730 135 885 <br /><br />

                Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy w Wadowicach <br />
                tel: 531-403-805 <br />
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
