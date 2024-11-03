<?php include ("includes/header.inc");?>

<main>
    <div class="row">
        <div class="col-md-6">
            <img src="main.jpg" alt="main">
        </div>
        <div class="col-md-6">
            <h1>Pets Victoria</h1>
            <h2>Welcome To Pet Adoption</h2>
        </div>  
    </div>  
     <form  method="post" action="search.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-7">
          <input type="search" class="form-control" id="searchkey" name="searchkey" placeholder="I am looking for..."
                            aria-label="Search through site content">  
        </div>
        <div class="col-md-3">
            <select id="pettype" name="pettype" class="form-control">
                    <option value="">
                        Select your pet type
                    </option>
                    <option value="cat">
                        cat
                    </option>
                    <option value="dog">
                        dog
                    </option>
                    
                </select>
        </div> 
        <div class="col-md-2">
          <button class="btn btn-primary">Search</button>  
        </div>  
    </div>
    </form>  
    <div class="row">
        <div class="col-md-12">
            <h4>Discover Pets Victoria</h4>
            Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, Focused on providing a safe and loving environment for pets in need. With a compassionate approcah, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, inclusing adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.
        </div>  
    </div>   

</main>

<?php include ("includes/footer.inc");?>