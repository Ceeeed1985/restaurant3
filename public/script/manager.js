// MES VARIABLES

let monTaskManager = document.getElementById("monTaskManager");
let dashboard = document.getElementById("dashboard");
let messagerie = document.getElementById("messagerie");
let guestbook = document.getElementById("guestbook");
let medias = document.getElementById("medias");
let campagnes = document.getElementById("campagnes");
let blog = document.getElementById("blog");
let menus = document.getElementById("menus");

let display = document.getElementById("display");


// MES EVENEMENTS

monTaskManager.addEventListener("click", () => {
    display.innerHTML = `<h1>Bienvenue sur l'espace Manager</h1>
    <img src="../pictures/image_task_manager.png" class="float-start me-3" alt="Image flottante à gauche">
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quod ratione maiores aliquid pariatur, dolorem distinctio voluptates ut tempore consequatur sequi velit ipsum aliquam eos, natus reprehenderit consequuntur similique modi.
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor aliquam possimus praesentium consectetur modi eveniet. Ratione alias deserunt fugit sint ad. Doloribus, eligendi ea impedit culpa vero repellendus quibusdam enim voluptate voluptatem, veniam repellat odio molestias maxime quod! Eum error ducimus, provident, sapiente ea quam molestias minima magni ipsum ad culpa sit temporibus doloribus! Nobis esse rerum reprehenderit, exercitationem sed quaerat explicabo modi mollitia perspiciatis, eveniet eligendi ea dignissimos repudiandae nemo eius totam necessitatibus?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quis dolorem quo est magni laborum provident illo nobis optio sequi. Aperiam illo facilis commodi amet placeat, ex modi ea perferendis cumque mollitia hic eum ut voluptas architecto porro voluptates pariatur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, magnam.</p>
`;
})
dashboard.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-primary">Bienvenue sur le dashboard</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
messagerie.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-danger">Bienvenue sur la messagerie</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
guestbook.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-warning">Bienvenue sur le livre d'or</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
medias.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-success">Bienvenue dans ton gestionnaire de médias</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
campagnes.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-info">Bienvenue dans ton gestionnaire de campagnes</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
blog.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-secondary">Bienvenue dans ton gestionnaire d'articles de blog</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})
menus.addEventListener("click", () => {
    display.innerHTML = `<h2 class="text-dark">Bienvenue sur l'espace pour gérer les menus de ton restaurant</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, error!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum debitis dolorum veritatis hic, amet quae totam cum molestias aliquam magni laudantium dolore. Vitae, mollitia officia.</p>
<p>Lorem ipsum dolor sit amet.</p>`;
})


// PAGE PAR DEFAUTL
display.innerHTML = `<h1>Bienvenue sur l'espace Manager</h1>
    <img src="../pictures/image_task_manager.png" class="float-start me-3" alt="Image flottante à gauche">
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quod ratione maiores aliquid pariatur, dolorem distinctio voluptates ut tempore consequatur sequi velit ipsum aliquam eos, natus reprehenderit consequuntur similique modi.
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor aliquam possimus praesentium consectetur modi eveniet. Ratione alias deserunt fugit sint ad. Doloribus, eligendi ea impedit culpa vero repellendus quibusdam enim voluptate voluptatem, veniam repellat odio molestias maxime quod! Eum error ducimus, provident, sapiente ea quam molestias minima magni ipsum ad culpa sit temporibus doloribus! Nobis esse rerum reprehenderit, exercitationem sed quaerat explicabo modi mollitia perspiciatis, eveniet eligendi ea dignissimos repudiandae nemo eius totam necessitatibus?</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quis dolorem quo est magni laborum provident illo nobis optio sequi. Aperiam illo facilis commodi amet placeat, ex modi ea perferendis cumque mollitia hic eum ut voluptas architecto porro voluptates pariatur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, magnam.</p>
`;