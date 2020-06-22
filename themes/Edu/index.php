<?php get_header(); ?>

    <?php

        $teacher = new WP_Query(array(
            'post_type' => 'teacher'
        ));

        while($teacher->have_posts()){
            $teacher->the_post();
            ?>

            <a href="<?php the_permalink(); ?>"><h2><small><?php the_field('academic_titles'); ?></small> <?php the_title(); ?></h2></a>
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
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
            <hr>

            <?php 
        }
        wp_reset_postdata();

        ?>

        <hr><hr>

        <?php

        $course = new WP_Query(array(
            'post_type' => 'course'
        ));

        while($course->have_posts()){
            $course->the_post();
            ?>

            <a href="<?php the_permalink(); ?>"><h2>Course Name: <?php the_title(); ?></h2></a>
            <?php  
            
            $teacherCourse = get_field('teacher_name');
            foreach($teacherCourse as $teacher){
                echo $teacher->post_title;
                ?>
                <br>
                <?php
            }

            ?>

            <hr>

            <?php 
        }
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>