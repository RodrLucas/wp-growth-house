<?php get_header(); ?> 

<div>
    <main>
        <section class="main__apresentation">
            <h1 class="main__apresentation-tittle">Agência de Marketing Digital para E-commerce</h1>
        </section>

        <section class="main__explication">
            <div class="main__explication-container1">
                <h1 class="main__explication-tittle"><strong>Lorem ipsum</strong> dolor sit amet</h1>
                <div class="main__explication-diviser"></div>
                <p class="main__explication-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga
                    nesciunt, molestias ipsum eligendi debitis dolor tempore facilis enim? Sit, deleniti? Quisquam
                    inventore maxime repellat fugiat, dolorum temporibus illum perferendis suscipit?</p>
            </div>
            <div>
                <img class="main__explication-img" src="https://pbs.twimg.com/media/EbbCZWRXkAAbNi-?format=jpg&name=4096x4096" alt="services">
            </div>
        </section>

        <section class="who__beliver">
            <div class="who__beliver-container1">
                <h1 class="who__beliver-tittle"><strong>Quem acredita</strong> na nossa empresa</h1>
                <div class="who__beliver-diviser"></div>
            </div>

            <div id="who__beliver--items-wrapper">
                <div id="who__beliver-items">
                    <div class="who__beliver-item"><img class="who__beliver-img" src="https://pbs.twimg.com/media/FN1XNpOX0AY91Ce?format=jpg&name=4096x4096"
                            alt="Company"></div>

                    <div class="who__beliver-item"><img class="who__beliver-img" src="https://pbs.twimg.com/media/DgFTdZ-XUAMaxsZ?format=jpg&name=4096x4096"
                            alt="Company"></div>

                    <div class="who__beliver-item"><img class="who__beliver-img" src="https://miro.medium.com/max/12894/1*8iDAygnIqo4mhTcr-XicVg.jpeg"
                            alt="Company"></div>

                </div>
            </div>
        </section>

        <section class="main__contacts">
            <div class="main__contacts-maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7314.41380995299!2d-46.6663348249778!3d-23.561011338731987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce592e3bd92575%3A0x528c771b2263bb05!2sGrowth%20House!5e0!3m2!1sen!2sbr!4v1648836856108!5m2!1sen!2sbr"
                    width="100%vw" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <form class="main__contacts-form">
                <h2 class="main__contacts-tittle"><strong>Lorem ipsum</strong> dolor sit amet</h2>
                <div class="main__contacts-diviser"></div>

                <p class="main__contacts-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus
                    illum tempore obcaecati reprehenderit reiciendis a animi nulla nam quam iste nostrum fuga magni,
                    fugiat neque cupiditate id modi debitis aliquam!</p>

                <input class="main__contacts-inputs" type="text" placeholder="Nome">

                <input class="main__contacts-inputs" type="email" placeholder="Email">

                <input class="main__contacts-inputs" type="tel" placeholder="Telefone">

                <textarea placeholder="Mensagem" id="textarea" cols="30" rows="10"></textarea>

                <button class="button" type="submit">Enviar</button>
            </form>
        </section>

        <section class="newsletter">
            <form class="main__newsletter-form">
                <h2 class="main__newsletter-tittle">NewsLetter</h2>

                <div class="main__newsletter-diviser"></div>

                <input class="main__newsletter-inputs" type="text" placeholder="Nome">

                <input class="main__newsletter-inputs" type="email" placeholder="Email">

                <button id="button-newsletter" class="button" type="submit">Enviar</button>
            </form>
        </section>
    </main>
</div>
<?php get_footer(); ?> 