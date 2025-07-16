<section class="white clear">
  <div class="ext__container">
    <div class="secblock">

      <!-- Block Pengumuman + Blog Guru + Agenda -->
      <div class="pead clear">
        <div class="innpad clear">

          <!-- Pengumuman -->
          <div class="peaduo hleft">

            <h3 class="fopen">
              <?php echo (get_option('gtumum')) ? get_option('gtumum') : 'Pengumuman' ?>
            </h3>

            <div class="homloop">
              <?php query_posts('post_type=pengumuman&showposts=3'); ?>

              <?php if (have_posts()) { ?>
                <?php $count = 0; ?>
                <?php while (have_posts()): the_post(); ?>
                  <?php $count++; ?>

                  <?php if ($count == 1) { ?>
                    <div class="six-info n-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="top-post">
                        <div class="metas">Terbit :
                          <span><?php echo get_the_time('j M Y'); ?></span>
                        </div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="six-info no-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="metas">Terbit :
                        <span><?php echo get_the_time('j M Y'); ?></span>
                      </div>
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>

                  <?php } ?>
                <?php endwhile; ?>
              <?php } else { ?>
                <div class="six-info n-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="top-post">
                    <div class="metas">Terbit : <span>15 Juli 2025</span></div>
                    <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Pertama</a></h3>
                  </div>
                </div>
                <div class="six-info no-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="metas">Terbit : <span>15 Juli 2025</span></div>
                  <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Kedua</a></h3>
                </div>
              <?php } ?>
              <div class="readmore"><span><a href="<?php echo home_url('/pengumuman/'); ?>">Selengkapnya</a></span>
              </div>
              <?php wp_reset_query(); ?>
            </div>

          </div>
          <!-- Pengumuman -->

          <!-- Blog Guru -->
          <div class="peaduo hleft">
            <h3 class="fopen">
              <?php echo (get_option('gtakaguru')) ? get_option('gtakaguru') : 'Blog Guru' ?>
            </h3>

            <div class="homloop">
              <?php query_posts('post_type=blog&showposts=3'); ?>

              <?php if (have_posts()) { ?>
                <?php $count = 0; ?>
                <?php while (have_posts()): the_post(); ?>
                  <?php $count++; ?>

                  <?php if ($count == 1) { ?>
                    <div class="six-info n-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="top-post">
                        <div class="metas">Terbit :
                          <span><?php echo get_the_time('j M Y'); ?></span>
                        </div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="six-info no-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="metas">Terbit :
                        <span><?php echo get_the_time('j M Y'); ?></span>
                      </div>
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>

                  <?php } ?>
                <?php endwhile; ?>
              <?php } else { ?>
                <div class="six-info n-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="top-post">
                    <div class="metas">Terbit : <span>15 Juli 2025</span></div>
                    <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Pertama</a></h3>
                  </div>
                </div>
                <div class="six-info no-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="metas">Terbit : <span>15 Juli 2025</span></div>
                  <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Kedua</a></h3>
                </div>
              <?php } ?>
              <div class="readmore"><span><a href="<?php echo home_url('/blog/'); ?>">Selengkapnya</a></span></div>
              <?php wp_reset_query(); ?>
            </div>

          </div>
          <!-- Blog Guru -->

          <!-- Fasilitas-->
          <div class="peaduo hleft">
            <h3 class="fopen">
              <?php echo (get_option('gtfasilitas')) ? get_option('gtfasilitas') : 'Fasilitas' ?>
            </h3>

            <div class="homloop">
              <?php
              // query_posts('post_type=fasilitas&showposts=3&orderby=rand');
              ?>

              <?php query_posts('post_type=fasilitas&showposts=3'); ?>

              <?php if (have_posts()) { ?>
                <?php $count = 0; ?>
                <?php while (have_posts()): the_post(); ?>
                  <?php $count++; ?>

                  <?php if ($count == 1) { ?>
                    <div class="six-info n-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="top-post">
                        <div class="metas"><?php echo (get_option('gtfasilitas')) ? get_option('gtfasilitas') : 'Fasilitas' ?>
                        </div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="six-info no-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="metas"><?php echo (get_option('gtfasilitas')) ? get_option('gtfasilitas') : 'Fasilitas' ?>
                      </div>
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>

                  <?php } ?>
                <?php endwhile; ?>
              <?php } else { ?>
                <div class="six-info n-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="top-post">
                    <div class="metas"><?php echo (get_option('gtfasilitas')) ? get_option('gtfasilitas') : 'Fasilitas' ?>
                    </div>
                    <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Pertama</a></h3>
                  </div>
                </div>
                <div class="six-info no-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="metas"><?php echo (get_option('gtfasilitas')) ? get_option('gtfasilitas') : 'Fasilitas' ?>
                  </div>
                  <h3><a href="#">Contoh Post Pengumuman Sekolah, Pengumuman Kedua</a></h3>
                </div>
              <?php } ?>
              <div class="readmore"><span><a href="<?php echo home_url('/fasilitas/'); ?>">Selengkapnya</a></span></div>
              <?php wp_reset_query(); ?>
            </div>

          </div>
          <!-- Fasilitas-->

          <!-- Prestasi -->
          <div class="peaduo hleft">

            <h3 class="fopen">
              <?php echo (get_option('gtpres')) ? get_option('gtpres') : 'Prestasi' ?>
            </h3>

            <div class="homloop">
              <?php query_posts('post_type=prestasi&showposts=3'); ?>

              <?php if (have_posts()) { ?>
                <?php $count = 0; ?>
                <?php while (have_posts()): the_post(); ?>
                  <?php $count++; ?>

                  <?php if ($count == 1) { ?>
                    <div class="six-info n-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="top-post">
                        <div class="metas">Peraih : <span><?php echo get_post_meta($post->ID, '_peraih', true); ?></span>
                        </div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="six-info no-one clear">
                      <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink() ?>" class="pealink"><?php the_post_thumbnail('news', array(
                                                                              'alt' => trim(strip_tags($post->post_title)),
                                                                              'title' => trim(strip_tags($post->post_title)),
                                                                            )); ?>
                        </a>
                      <?php } else { ?>
                        <a href="#" class="pealink">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                        </a>
                      <?php } ?>
                      <div class="metas">Peraih : <span><?php echo get_post_meta($post->ID, '_peraih', true); ?></span></div>
                      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>

                  <?php } ?>
                <?php endwhile; ?>
              <?php } else { ?>
                <div class="six-info n-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="top-post">
                    <div class="metas">Peraih : <span>Moh Ridwan</span></div>
                    <h3><a href="#">Juara 1 Lomba Melukis Tingkat Provinsi Tahun 2025</a></h3>
                  </div>
                </div>
                <div class="six-info no-one clear">
                  <a href="#" class="pealink">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" />
                  </a>
                  <div class="metas">Peraih : <span>Team Basket</span></div>
                  <h3><a href="#">Juara Ke-2 Turnamen Bola Basket Lampung Barat</a></h3>
                </div>
              <?php } ?>
              <div class="readmore"><span><a href="<?php echo home_url('/prestasi/'); ?>">Selengkapnya</a></span>
              </div>
              <?php wp_reset_query(); ?>
            </div>

          </div>
          <!-- Prestasi -->


        </div>
      </div>
      <!-- Block Pengumuman + Blog Guru + Agenda -->

    </div>
  </div>
</section>