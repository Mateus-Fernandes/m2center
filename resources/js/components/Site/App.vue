<template>
    <div>
    <header>
        <div class="container">
            <div class="logo">
                <router-link :to="{ name: 'home' }"><img src="http://18.228.42.180/images/assets/logo.png" alt="Logo M2 Center"></router-link>
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
                <form @submit.prevent="enviar">
                    <div class="cadaInput">
                            <input type="text" name="nome_envia" id="nome" placeholder="Nome completo" v-model="nome_envia" required>
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
                            <input type="email" name="email" id="email" placeholder="E-mail" v-model="email_envia" required>
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
                            <input type="text" id="telefone" name="telefone" placeholder="Telefone" v-model="telefone_envia" required>
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
                            <input type="text" id="mensagem" name="mensagem" placeholder="Mensagem" v-model="mensagem_envia" maxlength="200" required>
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
                    
                    <button type="submit" class="calltoaction fundopreto" data-aos="fade-in">Enviar Mensagem</button>
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
                        <li><router-link :to="{ name: 'home' }"><img src="http://18.228.42.180/images/assets/logo-footer.png" alt=""></router-link>></li>
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
                nome_envia:'',
                mensagem_envia:'',
                telefone_envia:'',
                email_envia:'',
                email: '',
                funcionamento_semana: '',
                funcionamento_hora: '',
                output: '',                                                                   
            };
        },
        mounted() {
                
                axios
                .get('http://18.228.42.180/api/contato/lista')
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
            afterEnter () {
                this.$root.$emit('scrollAfterEnter');
            },            
            enviar(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('http://18.228.42.180/envia', {
                    nome_envia: this.nome_envia,
                    telefone_envia: this.telefone_envia,
                    email_envia: this.email_envia,
                    mensagem_envia: this.mensagem_envia,
                })
                .then(function (response) {
                    currentObj.flashMessage.show({status: 'success', title: 'Mensagem Enviada com sucesso!', message: 'Aguarde o contato da nossa equipe.'})
                })
                .catch(function (error) {
                    if (error.response) {
                    // The request was made, but the server responded with a status code
                    // that falls out of the range of 2xx
                    console.log(error.response.data);
                    console.log(error.response.status);
                    console.log(error.response.headers);
                    } else {
                    // Something happened in setting up the request that triggered an Error
                    console.log('Error', error.message);
                    }
                    console.log(error.config);
                });
            }            
        },

}
</script>