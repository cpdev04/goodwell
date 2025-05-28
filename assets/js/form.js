
<div class="form-container">
  <form  action="https://api.web3forms.com/submit" method="POST" id="appointmentForm">
        <input type="hidden" name="access_key" value="af0c97fa-81b2-4b55-b315-b8f1ae15f4e4">
 <input type="hidden" name="subject" value="You have received a new appointment request via your website. The details are as follows:
">
    <div class="form-group myform-group">
      <label class="mylabel" for="department">Select Specialist / Department</label>
          <select id="department" name="department" required>
                    <option value="">Select Department</option>
                    <option value="General Physician">General Physician</option>
                    <option value="General Surgon">General Surgeon</option>
                    <option value="gynaecologist">Gynaecologist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Ortho Surgeon">Ortho Surgeon</option>
                    <option value="Anesthetist">Anesthetist</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Urologist">Urologist</option>
                    <option value="ENT">ENT</option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Pathologist">Pathologist</option>
                    <option value="Gastoenterologist">Gastroenterologist</option>
                    <option value="Radiologist">Radiologist</option>
                    <option value="Nephrologist">Nephrologist</option>
                    <option value="pulmonologist">Pulmonologist</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                </select>
    </div>

    <div class="form-group myform-group">
      <label  class="mylabel" for="doctor" >Select Doctor</label>
      <select id="doctor" name="doctor" required>
        <option value="">Select Doctor</option>
      </select>
    </div>

    <div class="form-group myform-group">
      <label  class="mylabel" for="location">Select Location</label>
      <select id="location" name="location" required>
        <option value="">Select Location</option>
        <option value="bangalore">Surakshaa Hospital Tanishandra </option>
        <option value="delhi">Surakshaa Hospital MCECHS </option>
        <option value="mumbai">Surakshaa Poly Cliinic</option>
      </select>
    </div>

    <div class="form-group myform-group">
      <label  class="mylabel" for="name">Name *</label>
      <input style="    border: 1px solid #E5E5E5 !important;"  type="text" name="name" id="name" required>
    </div>

    <div class="myrow">
      <div class="form-group myform-group">
        <label  class="mylabel" for="contact">Contact Number *</label>
        <input style="    border: 1px solid #E5E5E5 !important;" type="text" name="contact" id="contact" required>
      </div>
      <div class="form-group myform-group">
        <label  class="mylabel" for="email">Email Address</label>
        <input style="    border: 1px solid #E5E5E5 !important;" type="email" name="email" id="email">
      </div>
    </div>

    <div class="form-group myform-group">
      <label  class="mylabel" for="message">Message</label>
      <textarea id="message" name="message" maxlength="500" placeholder="Write your message..."></textarea>
    </div>

    <button class="mybtn" type="submit">Send Message</button>
  </form>
</div>

<script>
   const doctorsByDepartment = {
            "General Physician": ["Dr. Aruna Jyothi Ks", "Dr. Ramu G", "Dr. Pavan Raj N"],
            "General Surgon": ["Dr. Chandrakanth R Kesari", "Dr. Mohammed Muzamil Pasha", "Dr. Devaprashanth M"],
            "gynaecologist": ["Dr. Kumari Anamika", "Dr. Vismaya V", "Dr. Swetha Surendra Reddy"],
            "Neurologist": ["Dr. Sankalp A"],
            "Ortho Surgeon": ["Dr. Mandeep G", "Dr. Vinayaraj MK", "Dr. Varun V", "Dr. Girish H R"],
            "Anesthetist": ["Dr. Arun Kumar G.V", "Dr. Madhu Kumar B.S"],
            "Cardiologist": ["Dr. Sarthak Saho", "Dr. Nikhil Satish Shah", "Dr. Mujeeb Nasrulla"],
            "Urologist": ["Dr. Sanjeev S. Tonshal", "Dr. Tejas Mistry", "Dr. Roy", "Dr. Rachel", "Dr. Johnson"],
            "ENT": ["Dr. Vinay Bhatt"],
            "Dermatologist": ["Dr. Chaithanya N.T"],
            "Pathologist": ["Dr. Nanditha H.S"],
            "Pediatrician": ["Dr. Yoganand S", "Dr. Manjula L"],
            "Gastoenterologist": ["Dr. A M Gogi"],
            "Radiologist": ["Dr. Muniraju M"],
            "Nephrologist": ["Dr. Mahesh Chowdappa"],
            "pulmonologist": ["Dr. Abhilash"],
            "Psychiatrist": ["Dr. Sharana Basappa"]
        };

  const departmentSelect = document.getElementById("department");
  const doctorSelect = document.getElementById("doctor");

  departmentSelect.addEventListener("change", function () {
    const selectedDept = this.value;
    doctorSelect.innerHTML = '<option value="">Select Doctor</option>';

    if (doctorsByDepartment[selectedDept]) {
      doctorsByDepartment[selectedDept].forEach(doctor => {
        const option = document.createElement("option");
        option.value = doctor;
        option.textContent = doctor;
        doctorSelect.appendChild(option);
      });
    }
  });
  
  // Handle form submission with SweetAlert
  const form = document.getElementById("appointmentForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent default form submission

    const formData = new FormData(form);

    fetch("https://api.web3forms.com/submit", {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        Swal.fire({
          title: "Message Sent!",
          text: "Thank you for your appointment request. We’ll contact you soon.",
          icon: "success",
          confirmButtonText: "OK"
        });
        form.reset(); // Clear form after submission
        doctorSelect.innerHTML = '<option value="">-- Select Doctor --</option>'; // Reset doctors
      } else {
        Swal.fire({
          title: "Oops!",
          text: "Something went wrong. Please try again later.",
          icon: "error",
          confirmButtonText: "OK"
        });
      }
    })
    .catch(error => {
      Swal.fire({
        title: "Error!",
        text: "Unable to submit the form. Please check your internet connection.",
        icon: "error",
        confirmButtonText: "OK"
      });
    });
  });
</script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


