
<div class="copy">
    <h1 class="heading">{{title}}</h1>
    <div id="contact-area">
        
        <?php echo validation_errors(); ?>
        <?php echo form_open('form'); ?>
        
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" />
            <?php echo 'test test!' ?>
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" />
            
            <label for="Message">Message</label><br />
            
            <textarea name="Message" rows="5" cols="20" id="Message"></textarea>
            <!-- <label for="Message">Attach:</label><br />
            <input type="file" name="filename" id="file"> -->
            <div style="clear: both;"></div>
            <h4>Attach a photo of yourself</h4>
            <div class="cf">
                <input type="radio" name="pic" id="yes" value="yes" checked="checked"/><label class="photo"  for="yes"> Yup, I’m hot</label>
            </div>
            <p class="upload cf">
                <input class="uploadField" type="text" id="path" />
                <label class="add-photo-btn cta">browse<span><input type="file" class="uploadField" id="myfile" name="myfile" /></span>
            </label>
            </p>
            
            <div class="cf">
                <input type="radio" name="pic" id="no" value="no" /><label class="photo"  for="no"> No, thanks. My personality is golden enough</label> 
            </div>
            
            
            <input type="submit" name="submit" value="I want it!" class="cta send" />
        </form>
    </div>
</div>