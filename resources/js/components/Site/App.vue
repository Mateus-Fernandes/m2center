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
                <form action="#">
                    <div class="cadaInput">
                            <input type="text" id="nome" placeholder="Nome completo">
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
                            <input type="text" id="email" placeholder="E-mail">
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
                            <input type="text" id="telefone" placeholder="Telefone">
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
                    
                    <a href="#" class="calltoaction" data-aos="fade-in">Call to Action</a>
                </form>
            </div>
            <div class="dozecenter">
                <div class="iconesfooter" data-aos="fade-left">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="menufooter" data-aos="fade-right">
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
                email: '',
                funcionamento_semana: '',
                funcionamento_hora: '',                                                                   
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
        }
}
</script>