<!DOCTYPE html>
<html>
<head>

<script type="text/javascript">
    function validateform() {
        var ownerName = document.Medical.ownerName.value.length;
        var phoneNumber = document.Medical.phoneNumber.value.length;
        var ownerID = document.Medical.ownerId.value.length;
        var pettype = document.Medical.pettype.value.length;
        var breed = document.Medical.breed.value.length;
        var gender = document.Medical.gender.value.length;
        var vaccinated = document.Medical.vaccinated.value.length;
       
        // Validate that none of the fields are empty
        if (ownerName == 0) {
            alert("Owner Name is required.");
            return false;
        }
        if (phoneNumber == 0) {
            alert("Phone Number is required.");
            return false;
        }
        if (ownerID == 0) {
            alert("Owner ID is required.");
            return false;
        }
        if (pettype == 0) {
            alert("Pet Type is required.");
            return false;
        }
        if (breed == 0) {
            alert("Breed is required.");
            return false;
        }
        if (gender == 0) {
            alert("Gender is required.");
            return false;
        }
        if (vaccinated == 0) {
            alert("Vaccination status is required.");
            return false;
        }
        // If all fields are valid, return true to allow form submission
        return true;
    }
</script>

    <title>Pet Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form name="Medical" method="post" onsubmit="return validateform()">
            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="ownerName">Owner's Name:</label>
                <input type="text" id="ownerName" name="ownerName">

                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber">

                <label for="ownerID">Owner's ID Number:</label>
                <input type="text" id="ownerID" name="ownerID">
            </fieldset>

            <!-- Pet Information -->
            <fieldset>
                <legend>Pet Information</legend>
                <label for="petType">Pet's Type:</label>
                <select id="pet type" name="pet type">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="Others">Others</option>
                </select>

                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed">

                <label>Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </fieldset>

            <!--  Pet Health Information -->
            <fieldset>
                <legend>Pet Health Information</legend>
                <label>Vaccinated:</label>
                <select id="vaccinated" name="vaccinated">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <label for="pet passport">Pet Passport (Attach if available):</label>
                <input type="file" id="pet passport" name="pet passport">
            </fieldset> <br> <br>

            <!-- Submit Buttons -->
            <div class="form-buttons">
                <button type="submit">Submit Form</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>
</body>
</html>