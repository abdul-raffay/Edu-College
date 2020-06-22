<?php get_header(); ?>

    <?php

        $teacher = new WP_Query(array(
            'post_type' => 'teacher'
        ));

        while(have_posts()){
            the_post();
            ?>
            <h3><?php the_title(); ?></h3>
            <?php 

                $courses = get_posts(array(
                    'post_type' => 'course',
                    'meta_query' => array(
                        array(
                            'key' => 'teacher_name',
                            'compare' => 'LIKE',
                            'value' => '"' . get_the_ID() . '"'
                        )
                    )
                ));

            ?>
            <?php 

                if(is_page()){
                    ?>
                    <p>Courses:<br>
                        <small>
                            <?php 
                                // print_r($course); 
                                foreach($courses as $course){
                                    echo $course->post_name;
                                    ?> <br> <?php
                                }
                            ?>
                        </small>
                    </p>
                    <?php
                }

            ?>
            <?php
        }

    ?>

<?php get_footer(); ?>