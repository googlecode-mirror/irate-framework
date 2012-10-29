<!-- This is the Index Module, you can put your main HTML here -->
<div class="irfw_msg_box">
    <div class="irfw_msg_title">
        Irate Framework Welcome Message
    </div>
    <div class="irfw_msg_content">
        <p>Congratulations! You've successfully installed the Irate Framework! To edit this page, you need
        to go to the irfw_modules directory, and open up index/index.tpl. For more information on how 
        to go about to access the modules, read our online documentry.</p>
        <p>We are proud to present our 
        latest version, Version 3.0.2. Many things have changed from the
        last public release, Version 2.0. For a while we had released a
        Developer release version 3.0 that included a Framework Control Panel
        that allowed the user to edit modules straight from it, however, we
        found that there was a issue with some web hosters due to CHMOD access.
        With that said, we have decided to remove the Control Panel and work
        solely on the structural aspect of IRFW. You will notice the layout
        has changed structure wise, and things may not be where they use to,
        however if you were familiar with the last update, with a bit of digging
        you can find the same feel of coding that the last version had.</p>
        <p>Irate Framework now supports mobile recognition!
        {if $is_mobile}
        <b>[You are currently on a mobile device.]</b>
        {else}
        <b>[You are not on a mobile device.]</b>
        {/if}
        </p>
        <p>Version Changes:<br />
        =========================================<br />
        &nbsp;- Major Restructering of Code<br />
        &nbsp;- Created the IRFW Core class<br />
        &nbsp;&nbsp;  -> All classes will now run through this core.<br />
        &nbsp;&nbsp;  -> The IRFW Core holds the following Classes:<br />
        &nbsp;- Modulator System has been recreated to allow<br />
        &nbsp;&nbsp;  faster load times. DB Stored modules have been<br />
        &nbsp;&nbsp;  removed in this version.<br />
        &nbsp;- IRFW Control Panel has been removed.<br />
        &nbsp;- Global Variables are now defined in a global file "global.defines.php".<br />
        &nbsp;- Template system is now initiated in two different parts:<br />
        &nbsp;&nbsp;  -> Two files are included<br />
        &nbsp;&nbsp;&nbsp;     - Initializing File<br />
        &nbsp;&nbsp;&nbsp;     - Template Global Variable Defining File<br />
        &nbsp;- The template system has been updated to the latest release of Smarty.<br />
        &nbsp;- Discontinued use of the cgi-bin folder to store cache. Now using caching folder.<br /></p>
    </div>
</div>