<?php
  $title = "Can CBD improve my sleep";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="pagination pagination--blog-page">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Can CBD improve my sleep?</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="blog-6.php">Can CBD improve my sleep</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="banner banner--blog-page">
        <div class="banner__wrapper">
          <ul class="blog__tags">
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 1
              </a>
            </li>
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 2
              </a>
            </li>
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 3
              </a>
            </li>
          </ul>

          <picture class="picture">
            <source srcset="img/banner--cbd.webp" type="image/webp">
            <img width="1139" height="209" src="img/banner--cbd.jpg" alt="img">
          </picture>
        </div>
      </section>

      <article class="article">
        <div class="article__wrapper">
          <div class="article__content">
            <p class="article__description">
              <b>
                One of the many reasons people use CBD products is to help with sleep issues. From the anecdotal evidence, CBD seems effective at promoting deeper and most restful sleep, whether your problem sleeping is with insomnia or anxiety and many people are experimenting with the benefits of the whole range of CBD products from edibles to vape liquid. Today we’re taking a look at how CBD can help you sleep and what the right option could be for you.
              </b>
            </p>

            <section class="article__item">
              <h2 class="article__item-title">What is CBD?</h2>

              <p class="article__item-text">
                CBD stands for cannabidiol, a compound which is found in the cannabis plant. Since a study conducted by the World Health Organisation came to the conclusion that CBD wasn’t chemically addictive[1], the floodgates have opened for a huge variety of CBD infused products so people can take advantage of the benefits.
              </p>

              <p class="article__item-text">
                It’s just as important to say what CBD is not. Cannabidiol is not the cannabis compound that makes you high: that’s THC – Tetrahydrocannabinol. To be licensed for sale in the EU and UK, CBD products need to contain no more than 0.2%, and specially bred strains of the cannabis plant with low THC levels to ensure they hit this target. This means that you can use CBD oils and edibles with the confidence that they’re not going to impair your judgement or change your perceptions: they aren’t intoxicants.
              </p>

              <div class="youtube youtube--blog-item">
                <div class="youtube__content" data-id="ud_refZuQoA">
                  <svg class="youtube__play" xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 512 512" fill="#ffffff">
                     <g>
                        <g>
                           <path d="M431.36,80.64A248,248,0,1,0,80.64,431.36,248,248,0,1,0,431.36,80.64ZM420.05,420.05A232,232,0,0,1,91.95,91.95a232,232,0,0,1,328.1,328.1Z"/>
                           <path d="M176,464.7a7.982,7.982,0,0,1-2.963-.571A224.077,224.077,0,0,1,32,256a8,8,0,0,1,16,0A208.073,208.073,0,0,0,178.965,449.271,8,8,0,0,1,176,464.7Z"/>
                           <path d="M216.009,476.305a8.072,8.072,0,0,1-1.482-.138c-5.557-1.041-11.141-2.309-16.595-3.77a8,8,0,1,1,4.136-15.455c5.063,1.355,10.245,2.533,15.405,3.5a8,8,0,0,1-1.464,15.865Z"/>
                        </g>
                        <path d="M208.538,352a8,8,0,0,1-8-8V168a8,8,0,0,1,12.131-6.851l145.924,88a8,8,0,0,1,0,13.7l-145.924,88A8,8,0,0,1,208.538,352Zm8-169.833V329.833L338.971,256Z"/>
                     </g>
                  </svg>
                  <img class="youtube__thumb" src="img/videoposter-6.jpg" alt="Poster">
                  <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
              </div>
            </section>

            <section class="article__item">
              <h2 class="article__item-title">Does it Help You Sleep?</h2>

              <p class="article__item-text">
                Most clinical studies of the effects of CBD are in their early stages, so medically certain claims about precisely what CBD does and how it does it are thin on the ground.
              </p>

              <p class="article__item-text">
                The initial studies that have been done do seem to indicate that cannabidiol is effective at promoting longer, deeper and higher quality sleep.[2] This is promising for anyone looking for a natural remedy for insomnia or anxiety that stops you sleeping, especially as CBD is mostly very well tolerated – it has few side effects, unlike some clinical medications.
              </p>
            </section>
          </div>

          <aside class="article__aside article__aside--author">
            <div class="article__aside-top article__aside-top--author">
              <picture class="article__aside-picture article__aside-picture--author picture">
                <source srcset="img/author.webp" type="image/webp">
                <img width="1139" height="209" src="img/author.jpg" alt="img">
              </picture>

              <div class="article__aside-mobile article__aside-mobile--author">
                <h3 class="article__aside-title article__aside-title--author">Adam Smitch</h3>

                <p class="article__aside-status article__aside-status--author">CEO Cosmetic</p>
              </div>
            </div>

            <button class="article__aside-button article__aside-button--author button-yellow" type="button" name="favorite">Add to favorite</button>

            <p class="article__aside-quote article__aside-quote--author">
              This is promising for anyone looking for a natural remedy for insomnia or anxiety that stops you sleeping, especially as CBD is mostly very well tolerated – it has few side effects, unlike some clinical medications.
            </p>
          </aside>
        </div>
      </article>

      <section class="related">
        <div class="related__wrapper">
          <h2 class="related__title">Related products</h2>

          <ul class="related__list products-list">
            <?php $i = 1; ?>
            <?php while ($i < 4) : ?>

              <li class="related__item products-list__item">
                <a class="related__link products-list__link button" href="/product-<?= $i ?>.php">
                  <picture class="products-list__picture picture">
                    <source srcset="img/product-<?= $i ?>.webp" type="image/webp">

                    <img width="281" height="188" src="img/product-<?= $i ?>.png" alt="img">
                  </picture>

                  <h3 class="related__item-title products-list__title">CBD CHARCOAL FACE MASK BROAD SPECTRUM</h3>

                  <p class="related__rating products-list__rating rating">
                    <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                      <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                    </svg>

                    <span>4.7</span>
                  </p>
                </a>

                <p class="related__price products-list__price ">
                  <span>6.99</span>$
                </p>

                <button class="related__cart products-list__cart button button-yellow" type="button" name="add-to-cart" data-product="<?= $i ?>">Add to cart</button>
              </li>
            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

    </main>

<?php
  include("footer.php");
 ?>
