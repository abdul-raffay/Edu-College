<?php get_header(); ?>

    <?php

        $teacher = new WP_Query(array(
            'post_type' => 'teacher',
        ));

        while($teacher->have_posts()){
            $teacher->the_post();
            ?>

            <a href="<?php the_permalink(); ?>"><h2><small><?php the_field('academic_titles'); ?></small> <?php the_title(); ?></h2></a>
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
            }

            ?>

            <hr>

            <?php 
        }
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>