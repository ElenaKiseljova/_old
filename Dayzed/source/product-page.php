<?php
  $title = "Calm hemp body oil";
  include("header.php");
 ?>

    <main class="page-main" itemscope itemtype="http://schema.org/Product">
      <section class="pagination pagination--bundle">
        <div class="pagination__wrapper">
          <h1 class="pagination__title" itemprop="name">Calm hemp body oil</h1>

          <ul class="pagination__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="index.php"><span itemprop="name">Home</span></a>
              <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="categories.php"><span itemprop="name">Categories</span></a>
              <meta itemprop="position" content="2" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="product-page.php"><span itemprop="name">Calm hemp body oil</span></a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>

      <article class="article article--product">
        <div class="article__wrapper">
          <div class="article__content">
            <section class="product">
              <div class="slider">
                <ul class="slider__nav">
                  <?php $i = 1; ?>
                  <?php while ($i < 7) : ?>
                  <li class="slider__item-nav">
                    <picture class="slider__picture-nav picture">
                      <source srcset="img/slide-product.webp" type="image/webp">
                      <img width="68" height="68" src="img/slide-product.jpg" alt="img">
                    </picture>
                  </li>
                  <?php $i++; ?>
                  <?php endwhile; ?>
                  <li class="slider__item-nav">
                    <div class="slider__icon-wrapper">
                      <svg class="slider__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 512 512" fill="#ab875f">
                        <g>
                          <g>
                            <path d="M431.36,80.64A248,248,0,1,0,80.64,431.36,248,248,0,1,0,431.36,80.64ZM420.05,420.05A232,232,0,0,1,91.95,91.95a232,232,0,0,1,328.1,328.1Z"/>
                            <path d="M176,464.7a7.982,7.982,0,0,1-2.963-.571A224.077,224.077,0,0,1,32,256a8,8,0,0,1,16,0A208.073,208.073,0,0,0,178.965,449.271,8,8,0,0,1,176,464.7Z"/>
                            <path d="M216.009,476.305a8.072,8.072,0,0,1-1.482-.138c-5.557-1.041-11.141-2.309-16.595-3.77a8,8,0,1,1,4.136-15.455c5.063,1.355,10.245,2.533,15.405,3.5a8,8,0,0,1-1.464,15.865Z"/>
                          </g>
                          <path d="M208.538,352a8,8,0,0,1-8-8V168a8,8,0,0,1,12.131-6.851l145.924,88a8,8,0,0,1,0,13.7l-145.924,88A8,8,0,0,1,208.538,352Zm8-169.833V329.833L338.971,256Z"/>
                        </g>
                      </svg>
                    </div>
                  </li>
                </ul>
                <ul class="slider__for">
                  <?php $i = 1; ?>
                  <?php while ($i < 7) : ?>
                    <li class="slider__item-for">
                      <a class="slider__link-for" data-fancybox="slider" href="img/slide-product.jpg">
                        <picture class="slider__picture-for picture">
                          <source srcset="img/slide-product.webp" type="image/webp">
                          <img width="309" height="309" src="img/slide-product.jpg" alt="img">
                        </picture>
                      </a>
                    </li>
                  <?php $i++; ?>
                  <?php endwhile; ?>
                  <li class="slider__item-for">
                    <div class="youtube youtube--slider">
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
                        <img class="youtube__thumb" src="img/videoposter-1.jpg" alt="Poster">
                        <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                      </div>
                    </div>
                  </li>
                </ul>

                <button class="slider__button button" type="button" name="slidePrev"><span class="visually-hidden">Previous slide</span></button>
                <button class="slider__button button" type="button" name="slideNext"><span class="visually-hidden">Next slide</span></button>
              </div>

              <aside class="article__aside article__aside--product article__aside--product-mobile" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <div class="article__aside-top article__aside-top--product">
                  <div class="price">
                    <p class="price__new price__new--product">
                      <meta itemprop="priceCurrency" content="$" />
                      <span itemprop="price">30.5</span>$
                      <link itemprop="availability" href="http://schema.org/InStock"/>
                    </p>
                  </div>

                  <p class="count-product">
                    <button class="count-product__minus count-product__minus--product button" type="button" name="minus">-</button>
                    <span class="count-product__count">1</span>
                    <button class="count-product__plus count-product__plus--product button" type="button" name="plus">+</button>
                  </p>

                  <button class="article__aside-top-button article__aside-top-button--product button button-yellow" type="button" name="add-to-cart">Add to cart</button>
                  <button class="article__aside-top-button article__aside-top-button--product button button-yellow" type="button" name="favorite">Add to favorite</button>
                </div>

                <p class="article__aside-code">Product Code: #<span>F - 20FX</span></p>
              </aside>
              <div class="product__content">
                <p class="product__box">
                  250mg
                </p>

                <p class="product__rating rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                  <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                    <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                  </svg>
                  <meta itemprop="worstRating" content = "1">
                  <meta itemprop="bestRating"  content = "5">
                  <meta itemprop="ratingCount" content = "7">
                  <span itemprop="ratingValue">4.7</span>
                </p>

                <h3 class="product__title">~All products have less than 0.2% THC~</h3>

                <p class="product__description" itemprop="description">
                  Replenish your skin and drift off to sleep in luxury with our Lavender CBD Face Mask. This gently soothing product promotes healthy skin in a calming way. Containing 20mg of active broad-spectrum CBD, this face mask will help you wake up feeling.
                </p>
              </div>
            </section>
          </div>
          <aside class="article__aside article__aside--product article__aside--product-desctop" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <div class="article__aside-top article__aside-top--product">
              <div class="price">
                <p class="price__new price__new--product">
                  <meta itemprop="priceCurrency" content="$" />
                  <span itemprop="price">30.5</span>$
                  <link itemprop="availability" href="http://schema.org/InStock"/>
                </p>
              </div>

              <p class="count-product">
                <button class="count-product__minus count-product__minus--product button" type="button" name="minus">-</button>
                <span class="count-product__count">1</span>
                <button class="count-product__plus count-product__plus--product button" type="button" name="plus">+</button>
              </p>

              <button class="article__aside-top-button article__aside-top-button--product button button-yellow" type="button" name="add-to-cart">Add to cart</button>
              <button class="article__aside-top-button article__aside-top-button--product button button-yellow" type="button" name="favorite">Add to favorite</button>
            </div>

            <p class="article__aside-code">Product Code: #<span>F - 20FX</span></p>
          </aside>
        </div>
      </article>

      <article class="article article--product">
        <div class="article__wrapper">
          <div class="article__content">
            <section class="specs">
              <ul class="specs__list-button">
                <li class="specs__item-button">
                  <input class="visually-hidden" type="radio" name="text" id="text-1" data-index="0" checked>
                  <label for="text-1">Product tech specs</label>
                </li>
                <li class="specs__item-button">
                  <input class="visually-hidden" type="radio" name="text" id="text-2" data-index="1">
                  <label for="text-2">Description</label>
                </li>
                <li class="specs__item-button">
                  <input class="visually-hidden" type="radio" name="text" id="text-3" data-index="2">
                  <label for="text-3">Lab results</label>
                </li>
                <li class="specs__item-button">
                  <input class="visually-hidden" type="radio" name="text" id="text-4" data-index="3">
                  <label for="text-4">Video review</label>
                </li>
              </ul>

              <ul class="specs__list-text">
                <li class="specs__item-text">
                  <p>
                    <span>To use your CBD Night Face Mask to its fullest potential, follow these six simple steps: Using a gentle natural cleanser, thoroughly clean your face.</span> Allow your face to air dry fully; do not dry it with a towel. Remove your CBD oil face mask from its packaging, and carefully unfold it until it lays flat on the side with the plastic backing. Smooth out all bumps and creases. Place the cloth side of your CBD-infused face mask on your face.
                  </p>

                  <p>
                    Make sure that the pre-cut holes for your eyes, nostrils, and mouth line up perfectly with these facial features. Remove the plastic backing from your anti-wrinkle mask. Press and pat your CBD face mask with your hands until it fully adheres to every part of your face.
                  </p>

                  <p>
                    Make sure there are no air bubbles underneath your CBD skin care mask. Sit back, relax, and leave your CBD sheet mask for redness on your face for 10 minutes. Set a timer on your smartphone or tablet, and wait for the active ingredients in your top-rated CBD oil face mask to seep into your skin.
                  </p>

                  <p>
                    Remove your mask, and throw it away. Gently pat your entire face to make sure that any leftover ingredients fully
                  </p>
                </li>
                <li class="specs__item-text">
                  <p>
                    To use your CBD Night Face Mask to its fullest potential, follow these six simple steps: Using a gentle natural cleanser, thoroughly clean your face. Allow your face to air dry fully; do not dry it with a towel. Remove your CBD oil face mask from its packaging, and carefully unfold it until it lays flat on the side with the plastic backing. Smooth out all bumps and creases. Place the cloth side of your CBD-infused face mask on your face.
                  </p>

                  <p>
                    Make sure that the pre-cut holes for your eyes, nostrils, and mouth line up perfectly with these facial features. Remove the plastic backing from your anti-wrinkle mask. Press and pat your CBD face mask with your hands until it fully adheres to every part of your face.
                  </p>
                </li>
                <li class="specs__item-text">
                  <p>
                    To use your CBD Night Face Mask to its fullest potential, follow these six simple steps: Using a gentle natural cleanser, thoroughly clean your face. Allow your face to air dry fully; do not dry it with a towel. Remove your CBD oil face mask from its packaging, and carefully unfold it until it lays flat on the side with the plastic backing. Smooth out all bumps and creases. Place the cloth side of your CBD-infused face mask on your face.
                  </p>

                  <p>
                    Make sure that the pre-cut holes for your eyes, nostrils, and mouth line up perfectly with these facial features. Remove the plastic backing from your anti-wrinkle mask. Press and pat your CBD face mask with your hands until it fully adheres to every part of your face.
                  </p>

                  <p>
                    Make sure there are no air bubbles underneath your CBD skin care mask. Sit back, relax, and leave your CBD sheet mask for redness on your face for 10 minutes. Set a timer on your smartphone or tablet, and wait for the active ingredients in your top-rated CBD oil face mask to seep into your skin.
                  </p>
                </li>

                <li class="specs__item-text">
                  <div class="youtube youtube--tabs">
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
                      <img class="youtube__thumb" src="img/videoposter-1.jpg" alt="Poster">
                      <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                  <!--<ul class="video__list video-slider">
                    <?php $v = 1; ?>
                    <?php while ($v < 5) : ?>

                      <li class="video__item">
                        <div class="youtube youtube--video">
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
                            <img class="youtube__thumb" src="img/videoposter-1.jpg" alt="Poster">
                            <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>

                        <h3 class="video__item-title">Video title #<?= $v ?></h3>
                      </li>
                    <?php $v++; ?>
                    <?php endwhile; ?>
                  </ul>-->
                </li>
              </ul>
            </section>

            <section class="avaliuble">
              <h2 class="avaliuble__title">Included in following bundles</h2>

              <ul class="avaliuble__list categories__list">
                <li class="avaliuble__item categories__item stock">
                  <a class="categories__link" href="skincare.php">
                    <picture class="categories__picture picture">
                      <source srcset="img/cat-1.webp" type="image/webp">
                      <img width="143" height="190" src="img/cat-1.png" alt="img">
                    </picture>

                    <h3 class="categories__title">Skincare</h3>
                  </a>
                  <p class="categories__stock"><span>Best Price</span></p>
                </li>
                <li class="avaliuble__item categories__item">
                  <a class="categories__link" href="vaping.php">
                    <picture class="categories__picture picture">
                      <source srcset="img/cat-2.webp" type="image/webp">
                      <img width="67" height="129" src="img/cat-2.png" alt="img">
                    </picture>

                    <h3 class="categories__title">Vaping</h3>
                  </a>
                </li>
                <li class="avaliuble__item categories__item stock">
                  <a class="categories__link" href="oils.php">
                    <picture class="categories__picture picture">
                      <source srcset="img/cat-3.webp" type="image/webp">
                      <img width="163" height="163" src="img/cat-3.png" alt="img">
                    </picture>

                    <h3 class="categories__title">Oils</h3>
                  </a>
                  <p class="categories__stock">-10%</p>
                </li>
              </ul>
            </section>

            <section class="related">
              <div class="related__wrapper related__wrapper--product">
                <h2 class="related__title related__title--product">Related products</h2>

                <ul class="related__list related__list--product products-list">
                  <?php $i = 1; ?>
                  <?php while ($i < 4) : ?>

                    <li class="related__item related__item--product products-list__item stock">
                      <a class="related__link products-list__link button" href="/product-<?= $i ?>.php">
                        <picture class="related__picture related__picture--product products-list__picture picture">
                          <source srcset="img/product-<?= $i ?>.webp" type="image/webp">

                          <img width="281" height="188" src="img/product-<?= $i ?>.png" alt="img">
                        </picture>

                        <h3 class="related__item-title related__item-title--product products-list__title">CBD CHARCOAL FACE MASK BROAD SPECTRUM</h3>

                        <p class="related__rating related__rating--product products-list__rating">
                          <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                            <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                          </svg>

                          <span>4.7</span>
                        </p>
                      </a>

                      <p class="related__price related__price--product products-list__price ">
                        <span>6.99</span>$
                      </p>

                      <p class="products-list__stock">-10%</p>

                      <button class="related__cart related__cart--product products-list__cart button button-yellow" type="button" name="add-to-cart" data-product="<?= $i ?>">Add to cart</button>
                    </li>
                  <?php $i++; ?>
                  <?php endwhile; ?>
                </ul>
              </div>
              <button class="related__arrow related__arrow--product button" type="button" name="arrowNext"><span class="visually-hidden">Show more of products</span> </button>
            </section>

            <section class="reviews" itemprop="review" itemscope itemtype="http://schema.org/Review">
              <h2 class="reviews__title">Product reviews by customers(external)</h2>

              <ul class="reviews__list">
                <li class="reviews__item" itemprop="itemreviewed">
                  <header class="reviews__header" itemprop="author">
                    <svg class="reviews__speaker" width="57px" height="57px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m493.886719 77.164062c-13.65625-51.203124-32.792969-77.164062-56.886719-77.164062-9.792969 0-18.765625 4.289062-26.886719 12.816406-44.890625 38.25-82.9375 63.664063-119.722656 79.96875-41.304687 18.304688-87.492187 26.824219-141.171875 26.050782-.789062-.015626-68.21875.164062-68.21875.164062-44.664062 0-81 36.347656-81 81.023438v81.027343c0 44.675781 36.335938 81.023438 81 81.023438 0 0 3.105469-.003907 8-.011719v100.9375c0 27.019531 21.980469 49 49 49h1.449219c21.242187 0 39.480469-13.121094 46.464843-33.445312l37.960938-110.929688c23.652344 4.308594 45.722656 11.019531 66.519531 20.234375 36.476563 16.167969 74.222657 41.328125 118.777344 79.179687.792969.675782 1.640625 1.242188 2.519531 1.722657 7.699219 7.472656 16.144532 11.238281 25.308594 11.238281 24.09375 0 43.230469-25.960938 56.886719-77.164062 11.679687-43.804688 18.113281-101.632813 18.113281-162.835938s-6.433594-119.03125-18.113281-162.835938zm-101.886719 162.835938c0-16.574219.484375-32.859375 1.429688-48.632812 18.160156 8.84375 30.570312 27.59375 30.570312 48.523437 0 20.941406-12.304688 39.707031-30.582031 48.554687-.9375-15.714843-1.417969-31.9375-1.417969-48.445312zm-362 41.050781v-81.027343c0-28.128907 22.878906-51.015626 51-51.015626h53v183.058594h-53c-28.121094 0-51-22.886718-51-51.015625zm127.539062 187.769531c-2.796874 8.128907-9.726562 13.179688-18.089843 13.179688h-1.449219c-10.476562 0-19-8.523438-19-19v-100.996094c16.488281-.042968 32.183594-.097656 32.578125-.167968 14.542969-.132813 28.511719.441406 41.992187 1.683593zm145.007813-108.386718c-41.289063-18.300782-86.734375-27.683594-138.546875-28.554688v-183.066406c51.742188-.878906 97.203125-10.277344 138.546875-28.601562 25.265625-11.195313 50.886719-26.234376 78.410156-46.125-.28125 1.019531-.566406 2.035156-.84375 3.074218-11.679687 43.804688-18.113281 101.636719-18.113281 162.839844s6.433594 119.035156 18.113281 162.835938c.351563 1.320312.710938 2.613281 1.070313 3.902343-27.632813-19.996093-53.316406-35.085937-78.636719-46.304687zm162.351563 34.671875c-12.152344 45.578125-25.097657 54.894531-27.898438 54.894531s-15.746094-9.316406-27.898438-54.894531c-5.820312-21.816407-10.253906-47.457031-13.152343-75.425781 34.113281-11.117188 58.050781-43.335938 58.050781-79.789063 0-20.09375-7.277344-39.566406-20.496094-54.824219-10.09375-11.65625-23.117187-20.242187-37.53125-24.953125 2.894532-27.890625 7.324219-53.457031 13.128906-75.222656 12.152344-45.574219 25.097657-54.890625 27.898438-54.890625s15.746094 9.316406 27.898438 54.894531c11.027343 41.351563 17.101562 96.4375 17.101562 155.105469s-6.074219 113.753906-17.101562 155.105469zm0 0"/>
                    </svg>

                    <div class="reviews__name" itemscope itemtype="http://schema.org/Person">
                      <h3 itemprop="name">Nika Shternn</h3>
                    </div>

                    <p class="reviews__date">
                      <span>10.03.2020</span>
                    </p>

                    <p class="reviews__rating rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                      <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                        <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                      </svg>
                      <meta itemprop="worstRating" content = "1">
                      <meta itemprop="bestRating"  content = "5">
                      <meta itemprop="ratingCount" content = "10">
                      <span itemprop="ratingValue">4</span>
                    </p>
                  </header>

                  <h4 class="reviews__mention">Advantage</h4>
                  <meta itemprop="datePublished" content="10.03.2020">
                  <p class="reviews__text" itemprop="reviewBody">
                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo
                  </p>

                  <h4 class="reviews__mention">Limitations</h4>

                  <p class="reviews__text">
                    Perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo
                  </p>
                </li>
              </ul>

              <a class="reviews__more button" href="#">More reviews</a>
            </section>
          </div>
          <aside class="article__aside article__aside--blog">
            <div class="article__aside-top article__aside-top--blog">
              <a class="article__aside-link" href="blog-6.php">
                <picture class="article__aside-blog-picture picture">
                  <source srcset="img/blog-prod.webp" type="image/webp">
                  <img width="262" height="182" src="img/blog-prod.png" alt="img">
                </picture>
              </a>

              <div class="article__aside-mobile">
                <ul class="tags tags--aside">
                  <li class="tags__item">
                    <a href="#">
                      products
                    </a>
                  </li>
                  <li class="tags__item">
                    <a href="#">
                      products
                    </a>
                  </li>
                </ul>
                <a class="article__aside-link" href="#">
                  <h3 class="article__aside-blog-title">Blog article title</h3>
                </a>

                <p class="article__aside-blog-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                </p>
              </div>
            </div>
          </aside>
        </div>
      </article>
    </main>

<?php
  include("footer.php");
 ?>
