<template>
    <div>
    <header>
        <div class="container">
            <div class="logo">
                <router-link :to="{ name: 'home' }"><img src="http://www.m2center.com.br/images/assets/logo.png" alt="Logo M2 Center"></router-link>
            </div>
            <div class="menu">
                    <nav role="navigation" class="menuv2">
                            <div id="menuToggle">
                              <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                            <ul id="menu">
                                <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                                <li><router-link :to="{ name: 'quemsomos' }">Quem Somos</router-link></li>
                                <li><router-link :to="{ name: 'servicos' }">Serviços</router-link></li>
                                <li><router-link :to="{ name: 'blog' }">Blog</router-link></li>
                                <li><a href="" v-scroll-to="'#contato'">Contato</a></li>
                            </ul>
                           </div>
                          </nav>
                <nav class="stroke">
                    <ul>
                    <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                    <li><router-link :to="{ name: 'quemsomos' }">Quem Somos</router-link></li>
                    <li><router-link :to="{ name: 'servicos' }">Serviços</router-link></li>
                    <li><router-link :to="{ name: 'blog' }">Blog</router-link></li>
                    <li><a class="contato" href="" v-scroll-to="'#contato'"><span>Contato</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <transition name="fade" mode="out-in">
            <router-view></router-view>
    </transition>
    <footer>
        <div class="container" id="contato">
            <div class="localizacao" data-aos="fade-down">
                <h2>{{titulo_contato}}</h2>
                <p><b>{{cidade}}</b> | {{endereco}} <br> {{bairro}} | {{cep}}</p>
                <p><a href="#">{{email}}</a></p>
                <p><b>{{funcionamento_semana}}:</b> {{funcionamento_hora}}</p>
            </div>
            <div class="formulario" data-aos="fade-up">
                <form action="http://www.m2center.com.br/envia" method="post">
                    <div class="cadaInput">
                            <input type="text" name="nome_lead" id="nome" placeholder="Nome completo" :class="{ 'is-invalid': hasError('nome_lead') }" v-model="form.nome_lead" required>
                            <div v-if="hasError('nome_lead')" class="invalid-feedback">@{{ getError('nome_lead') }}</div>
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 570 90">
                            <defs>
                                    <linearGradient id="meugradiente" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#ff4614" />
                                            <stop offset="100%" stop-color="#ff8214" />
                                          </linearGradient>
                            </defs>
                           <path fill-rule="evenodd" id="form" stroke="rgb(62, 62, 62)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                            d="M11.000,2.000 L557.000,2.000 C561.970,2.000 566.000,6.029 566.000,11.000 L566.000,77.000 C566.000,81.970 561.970,86.000 557.000,86.000 L11.000,86.000 C6.029,86.000 2.000,81.970 2.000,77.000 L2.000,11.000 C2.000,6.029 6.029,2.000 11.000,2.000 Z"/>
                           </svg>
                    </div>
                    <div class="cadaInput">
                            <input type="email" name="email_lead" id="email" placeholder="E-mail" :class="{ 'is-invalid': hasError('email_lead') }" v-model="form.email_lead" required>
                            <div v-if="hasError('email_lead')" class="invalid-feedback">@{{ getError('email_lead') }}</div>
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 570 90">
                            <defs>
                                    <linearGradient id="meugradiente" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#ff4614" />
                                            <stop offset="100%" stop-color="#ff8214" />
                                          </linearGradient>
                            </defs>
                           <path fill-rule="evenodd" id="form2" stroke="rgb(62, 62, 62)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                            d="M11.000,2.000 L557.000,2.000 C561.970,2.000 566.000,6.029 566.000,11.000 L566.000,77.000 C566.000,81.970 561.970,86.000 557.000,86.000 L11.000,86.000 C6.029,86.000 2.000,81.970 2.000,77.000 L2.000,11.000 C2.000,6.029 6.029,2.000 11.000,2.000 Z"/>
                           </svg>
                    </div>
                    <div class="cadaInput">
                            <input type="text" id="telefone" name="telefone_lead" placeholder="Telefone" :class="{ 'is-invalid': hasError('telefone_lead') }" v-model="form.telefone_lead" required>
                            <div v-if="hasError('telefone_lead')" class="invalid-feedback">@{{ getError('telefone_lead') }}</div>
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 570 90">
                            <defs>
                                    <linearGradient id="meugradiente" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#ff4614" />
                                            <stop offset="100%" stop-color="#ff8214" />
                                          </linearGradient>
                            </defs>
                           <path fill-rule="evenodd" id="form3" stroke="rgb(62, 62, 62)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                            d="M11.000,2.000 L557.000,2.000 C561.970,2.000 566.000,6.029 566.000,11.000 L566.000,77.000 C566.000,81.970 561.970,86.000 557.000,86.000 L11.000,86.000 C6.029,86.000 2.000,81.970 2.000,77.000 L2.000,11.000 C2.000,6.029 6.029,2.000 11.000,2.000 Z"/>
                           </svg>
                    </div>
                    <div class="cadaInput">
                            <input type="text" id="mensagem" name="mensagem_lead" placeholder="Mensagem" :class="{ 'is-invalid': hasError('mensagem_lead') }" v-model="form.mensagem_lead" maxlength="200" required>
                            <div v-if="hasError('mensagem_lead')" class="invalid-feedback">@{{ getError('mensagem_lead') }}</div>
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 570 90">
                            <defs>
                                    <linearGradient id="meugradiente" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="#ff4614" />
                                            <stop offset="100%" stop-color="#ff8214" />
                                          </linearGradient>
                            </defs>
                           <path fill-rule="evenodd" id="form4" stroke="rgb(62, 62, 62)" stroke-width="4px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
                            d="M11.000,2.000 L557.000,2.000 C561.970,2.000 566.000,6.029 566.000,11.000 L566.000,77.000 C566.000,81.970 561.970,86.000 557.000,86.000 L11.000,86.000 C6.029,86.000 2.000,81.970 2.000,77.000 L2.000,11.000 C2.000,6.029 6.029,2.000 11.000,2.000 Z"/>
                           </svg>
                           <FlashMessage></FlashMessage>
                    </div>
                    <div class="cadaInput">
                        <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="6LcIdZgUAAAAALMvFC9boMUKhm8T0l5_UeFOcLea"></div>
                            
                    </div>                    
                    
                    <button type="submit" @click.prevent="leaveFeedback()" class="calltoaction fundopreto" data-aos="fade-in">Enviar Mensagem</button>
                </form>
            </div>
            <div class="dozecenter">
                <div class="iconesfooter">
                    <a href="https://www.facebook.com/m2centerRP/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/m2-center/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="menufooter">
                    <ul>
                        <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                        <li><router-link :to="{ name: 'quemsomos' }">Quem Somos</router-link></li>
                        <li><router-link :to="{ name: 'servicos' }">Serviços</router-link></li>
                        <li><router-link :to="{ name: 'blog' }">Blog</router-link></li>
                        <li><a href="" class="contatofooter" v-scroll-to="'#contato'">Contato</a></li>
                        <li><router-link :to="{ name: 'home' }"><img src="http://www.m2center.com.br/images/assets/logo-footer.png" alt=""></router-link>></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
</template>
<script>

export default {
        data() {
            return {
                titulo_contato: '',
                endereco: '',
                cidade: '',
                bairro: '',
                cep: '',
                form: {
                    nome_lead:'',
                    mensagem_lead:'',
                    nome_lead:'',
                    email_lead:''
                },
                errors: {},
                email: '',
                funcionamento_semana: '',
                funcionamento_hora: '',
                output: '',                                                                   
            };
        },
        mounted() {
                
                axios
                .get('http://www.m2center.com.br/api/contato/lista')
                .then(response => (
                    this.titulo_contato = response.data[0].titulo_contato,
                    this.endereco = response.data[0].endereco,
                    this.cidade = response.data[0].cidade,
                    this.bairro = response.data[0].bairro,
                    this.cep = response.data[0].cep,
                    this.email = response.data[0].email,
                    this.funcionamento_semana = response.data[0].funcionamento_semana,
                    this.funcionamento_hora = response.data[0].funcionamento_hora                                                                                
                    ))
                      
        },
        methods: {
            leaveFeedback: function() {
                    let form_data = new FormData();
                    form_data.append('nome_lead', this.form.nome_lead);
                    form_data.append('email_lead', this.form.email_lead);
                    form_data.append('telefone_lead', this.form.telefone_lead);
                    form_data.append('mensagem_lead', this.form.mensagem_lead);
                    form_data.append('g-recaptcha-response', grecaptcha.getResponse());

                    axios.post('http://www.m2center.com.br/envia', form_data)
                        .then(response => {
                            this.$swal({
                                title: 'Mensagem enviada com sucesso!',
                                type: 'success'
                            });

                            this.clearForm();
                            this.resetRecaptcha();
                        })
                        .catch(error => {
                            console.log(error.response.data);
                            this.errors = error.response.data.errors;

                            let errors_list = '';

                            for (let field in this.errors) {
                                errors_list += '<li class="list-group-item list-group-item-danger">' + this.errors[field][0] + '</li>';
                            }

                            this.$swal({
                                title: error.response.data.message,
                                type: 'error',
                                html: '<ul class="list-group list-group-flush">' + errors_list + '</ul>'
                            });
                        });

                },

                clearForm: function() {
                    this.form.nome_lead = '';
                    this.form.email_lead = '';
                    this.form.telefone_lead = '';
                },

                resetRecaptcha: function() {
                    grecaptcha.reset();
                },

                anyErrors: function() {
                    return Object.keys(this.errors).length > 0;
                },

                hasError: function(field) {
                    return this.errors.hasOwnProperty(field);
                },

                getError: function(field){
                    if (this.errors[field]) {
                        return this.errors[field][0];
                    }
                },            
            afterEnter () {
                this.$root.$emit('scrollAfterEnter');
            },                       
        },

}
</script>