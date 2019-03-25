<div class="container-fluid moduleColorEven">
    <div class="row">
        <div class="previewcol col-md-4">
            <?php if ($user->data()->complete_bl == 0){ ?>
            <img class="img-responsive" src="/usersc/images/bl.jpg" alt="Generic placeholder image">
            <?php } ?>
            <?php if ($user->data()->complete_bl == 1){ ?>
            <img class="img-responsive" src="/usersc/images/bl_watched.png" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="previewcol col-md-8">
            <h1 class="previewtitle">Beyond Lockdown</h1>
            <p class="previewdescription">CPPS has produced a new 15-minute video program, “Beyond Lockdown – Preventing and Responding to Extreme School Violence” This 15-minute program pulls from guidance from the FBI, Secret Service and Department of Education to educate students, parents, teachers and staff how to recognize warning signs that a student may be progressing towards violence, and how to respond effectively if violence does erupt.</p>
            <a href="/usersc/BL_page.php" target="" class="button is-white moduleButton">
                <?php if ($user->data()->complete_bl == 0){ ?>
                TAKE ME TO COURSE
                <?php } ?>
                <?php if ($user->data()->complete_bl == 1){ ?>
                REVIEW COURSE
                <?php } ?>
            </a>
        </div>
    </div>
</div>
