<?php
include("includes/db_connect.inc");
include ("includes/header.inc");
?>
        <main>
            <h2 class="addpets-page-title">Add a pet</h2>
            <p class="addpets-page-description">You can add a new pet here</p>
            <form  method="post" action="add-process.php" enctype="multipart/form-data">
                <label class="addpets-page-label starlabel">Pet Name: </label><label
                    class="addpets-page-labelstar">*</label><br>
                <input class="addpets-page-input" type="text" id="petname" name="petname"
                    placeholder="Provide a name for the pet "><br>
                <label class="addpets-page-label">Type: *</label><br>
                <select name="type">
                    <option value="">
                        --Choose an option--
                    </option>
                    <option value="cat">
                        cat
                    </option>
                    <option value="dog">
                        dog
                    </option>
                </select><br>
                <label class="addpets-page-label">Description: </label><label
                    class="addpets-page-labelstar">*</label><br>
                <input class="addpets-page-input" type="text" id="description" name="description"
                    placeholder="Describe the pet briefly"><br>
                <label class="addpets-page-label">Select an Image: </label><label
                    class="addpets-page-labelstar">*</label><br>
                <input type="file" id="image" name="image">
                <div class="addpets-page-maximage">
                    <label>Max image size: 500px</label>
                </div><br>
                <label class="addpets-page-label">Image Caption: </label><label
                    class="addpets-page-labelstar">*</label><br>
                <input class="addpets-page-input" type="text" id="imagecaption" name="imagecaption"
                    placeholder="Describe the image in one word"><br>
                <label class="addpets-page-label">Age(months): </label><label
                    class="addpets-page-labelstar">*</label><br>
                <input class="addpets-page-input" type="text" id="age" name="age"
                    placeholder="Age of a pet in months"><br>
                <label class="addpets-page-label">Location: </label><label class="addpets-page-labelstar">*</label><br>
                <input class="addpets-page-input" type="text" id="location" name="location"
                    placeholder="Location of the pet"><br>
                <div class="addpets-page-buttons">
                    <button class="addpets-page-submit" id="submit"> <span class="material-symbols-outlined">
                            add_task
                        </span>submit</button>
                    <button class="addpets-page-close" id="close"> <span class="material-symbols-outlined">
                            close
                        </span> clear</button>
                </div>

            </form>
        </main>
<?php 
include ("includes/footer.inc");
?>