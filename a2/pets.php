<?php
 include ("includes/header.inc");
 include("includes/db_connect.inc"); 
  $pets= mysqli_query($conn, "select * from pets");
 ?>
        <main>
            <h2 class="add-page-title">Discover Pets Victoria</h2>
            <p>Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, Focused on providing
                a safe and loving environment for pets
                in need.
                With a compassionate approcah, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs,
                cats, and other animals.
                Their mission is to connect these deserving pets with caring individuals and families, creating lifelong
                bonds.
                The organization offers a range of services, inclusing adoption counseling, pet education, and community
                support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless
                animals.
            </p>

            <div class="add-page-image">
                <img src="images/pets.jpeg" alt="pet">
            </div>
            <div class="add-page-table">
                <table style="width:100%">
                    <tr>
                        <th class="add-page-table-shortcolumn">Pet</th>
                        <th class="add-page-table-shortcolumn">Type</th>
                        <th class="add-page-table-shortcolumn">Age</th>
                        <th class="add-page-table-longcolumn">Location</th>
                    </tr>

                    <?php
                    while($row = mysqli_fetch_assoc($pets)) {
                        
                        echo "<tr>";
                        
                        echo "
                            <td><a href='details.php?id={$row['petid']}'>{$row['petname']}</a></td>
                            <td>{$row['type']}</td>
                            <td>{$row['age']}</td>                          
                            <td>{$row['location']}</td>
                            ";   
                        
                        echo "</tr>";
                    }
                    ?>

                </table>

            </div>

        </main>

<?php
 include ("includes/footer.inc");
 ?>