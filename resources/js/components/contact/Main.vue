<template>
    <section class="ds-contact">
        <!-- Logo -->
        <div class="ds-section-logo">
            <h1>Kontakt</h1>
        </div>
        <!-- Formy -->
        <div class="content">
            <h1 class="about-intro">Stowarzyszenie Rodziców i Opiekunów Dzieci Niepełnosprawnych <span class="pink">"Dać Szansę"</span> w Wadowicach</h1>
            <!--  -->
            <div class="wrapper">
                <c-forms></c-forms>
                <!--  -->
                <!-- FORMULARZ -->
                <!--  -->
                <div class="contact-us-form" :class='{sending: sendingMail}'>
                    <h1>Formularz kontaktowy</h1>
                    <div class="form-wrapper">
                        <div class="form">
                            <!--  -->
                            <span class="error" v-text='errors.content'></span>
                            <textarea cols="30" rows="10" placeholder="Treść" v-model='content'></textarea>
                            <!--  -->
                            <span class="error" v-text='errors.name'></span>
                            <input type="text" placeholder="Imię i nazwisko" v-model='name'>
                            <!--  -->
                            <span class="error" v-text='errors.email'></span>
                            <input type="email" placeholder="Adres email" v-model='email'>
                            <!--  -->
                            <div class="send" :class="{confirm:confirmSending}">
                                <div class="first">
                                    <button class='confirm' @click='confirmSending=true'><span>Wyślij</span></button>
                                </div>
                                <div class='second'>
                                    <h3>Na pewno?</h3>
                                    <div class="buttons">
                                        <button class="send" @click='sendEmail'><span>WYŚLIJ</span></button>
                                        <button class="pas" @click="confirmSending=false"><span>Anuluj</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sent" :class='{success:mailSuccess}'>
                            <div class="loading">
                                <span class="successInfo">
                                    <i class="fa fa-check"></i>
                                    <span class="message">Wiadomość została wysłana!</span>
                                </span>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
            </div>
        </div>
        <!--  -->
    </section>
</template>
<script>
import ContactForms from "./ContactForms";
export default {
    //
    components: {
        'c-forms': ContactForms
    },
    data(){
        return{
            content: null,
            email:null,
            name:null,
            confirmSending: false,
            sendingMail: false,
            mailSuccess: false,
            errors: {
                content: '',
                email: '',
                name: ''
            }
        }
    },
    methods: {
        sendEmail(){
            if (this.sendingMail || this.mailSuccess || !this.validateData()) return
            this.sendingMail=true
            const {content,email,name}=this
             axios.post('/kontakt/wyslij-wiadomosc-email',{
                 content,email,name
            }).then(r=>{
                this.mailSuccess=true
            }).catch(e=>{
                console.log(e);
            })
        },
        validateData(){
            let result=true
            const {content,email,name,errors}=this;
            for(const item in errors) errors[item]=''
            //Content
            if(!content) {
                errors.content='Pole treść jest wymagane!'
                result=false
            }else if(content.length<20){
                errors.content='Minimalna długość wiadomości to 20znaków!'
                result=false
            }else if(content.length>1000){
                errors.content='Maksymalna długość wiadomości to 1000znaków!'
                result=false
            }
            //Email
            if(!email) {
                errors.email='Pole email jest wymagane!'
                result=false
            }else if(!email.includes('@')){
                errors.email='Adres email musi zawierać @!'
                result=false
            }else if(email.length<6){
                errors.email='Minimalna długość adresu email to 6znaków!'
                result=false
            }else if(email.length>100){
                errors.email='Maksymalna długość adresu email to 100znaków!'
                result=false
            }
            //Name
            if(!name) {
                errors.name='Pole imie jest wymagane!'
                result=false
            }else if(name.length<6){
                errors.name='Minimalna długość wiadomości to 6znaków!'
                result=false
            }else if(name.length>100){
                errors.name='Maksymalna długość wiadomości to 100znaków!'
                result=false
            }
            if (!result) this.confirmSending=false
            return result
        }
    }
};
</script>
