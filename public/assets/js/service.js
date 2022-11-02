// Map your choices to your option value
var lookup = {
    'Amendment': ['Accounting Period', 
                'Email Address Changes',
                'Obligation Addition',
                'Obligation Removal',
                'Obligation Change',
                'Cancellation',
                'Station',
                'Directors_Associates',
                'Name Change',
                'Source of Income'],
                
     
    'Registration': ['Pin Individual Application',
                 'Pin Non-Individual Application',
                 'Pin Non-Individual Approval',
                 'Non Resident Pin Approval',
                 'Pin Cancellation',
                 'Pin Application Rejection'],
                 
     'Updates': ['iPage Update',
                 'ID PIN Linking',
                 'ID PIN Delinking',
                 'Inconsistent DOB',
                 'Data Correction'],
                 
     'Filing': ['IT1 Return',
                 'ITNR Return',
                 'IT2C Return',
                 'IT2P Return',
                 'MRI Return',
                 'PAYE Return',
                 'VAT Return',
                 'TOT Return',
                 'EXCISE Return',
                 'CGT'],
                 
     'Payment': ['Payment Registration',
                 'Payment Amendment',
                 'Payment Cancellation',
                 'Payment for Prior Years',
                 'Ledger Reconciliation'],
                 
     'TCC': 	  ['TCC Application Enquiry',
                 'TCC Approval Enquiry',
                 'TCC Rejection Enquiry',
                 'TCC Reprinting'],
                 
     'Enqueries': ['Pin Retrieval',
                 'Tax Station',
                 'Station Contacts',
                 'Payments',
                 'Runtime Errors',
                 'IFMIS',
                 'NTSA',
                 'CUSTOMS',
                 'Withholding Queries',
                 'Defaulter Notice'],
                 
    'Tickets': ['Ticket Number'],
    
     'Documenting': ['Bar Code Generation',
                 'Document Receipt'],
                 
     'Password': ['Unlock PIN',
                 'Reset Password'],
    
    'Others': ['Waiver Application',
                 'Refund Application',
                 'Referrals',
                 'Others'],
     
     'Customs': ['Customs - Declaration',
                 'Customs - Payments',
                 'Customs - Exemptions',
                 'Customs - Pin Activation',
                 'Customs - Return Resident',
                 'Customs - Others'],
    
 };
 
 // When an option is changed, search the above for matching choices
 $('#options').on('change', function() {
    // Set selected option as variable
    var selectValue = $(this).val();
 
    // Empty the target field
    $('#choices').empty();
    
    // For each chocie in the selected option
    for (i = 0; i < lookup[selectValue].length; i++) {
       // Output choice in the target field
       $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
    }
 });
 
  window.onload = () => {
             
         };
     
         var url = "https://briananikayi.io.ke/kraapi/api.php?pin="; // The server-side script
             
         function validatepin(x) {      
             var sId = x;
             var link1= url+sId;
             
             document.getElementById('formprocessing').innerHTML='fetching pin details...';
             document.getElementById('error').value = "";
             axios.get(link1).then((response)=>{
                 console.log(response);
     
                 let res = response.data;
                 var email = res.email;
                 var phone = res.phone;
                 var taxpayername = res.names;
                 var responsecode = res.response_code;
                 console.log(responsecode)
                 var responsedesc = res.message;
                 
  
                 
                 if (responsedesc == "No entry found")
                 {
                     //alert("Invalid Entry! confirm your entry!!");
                      swal("No Entry Fount!", "Invalid pin!", "error");
                     document.getElementById('formprocessing').innerHTML = "Data fetch was " + responsedesc;
                     document.getElementById('hideformprocessing').value = "ati Message" + responsedesc;
                     document.getElementById('taxpayername').value = "";
                     document.getElementById('middlename').value = "";
                     document.getElementById('lastname').value = "";
                     document.getElementById('dob').value = "";
                     document.getElementById('placeofbirth').value = "";
                     document.getElementById('gender').value = "";
                     
                 }
                 if (responsecode == "100")
                 {
                     //alert("Entry found!!");
                     swal("Valid Pin!", "Proceed to fill your form!", "success");
                     document.getElementById('formprocessing').innerHTML = "Message: " + responsedesc;
                    // document.getElementById('hideformprocessing').value = "Validation was " + responsedesc;
                     document.getElementById('taxpayername').value = taxpayername;
                     document.getElementById('email').value = email;
                     document.getElementById('phone').value = phone;
                     
                     //console.log(taxpayername)
                        // console.log(phone)
                       //  console.log(email)
                     // finish implementing the rest of the form
     
                     
                 }
                 if (responsecode == "400")
                 {
                 alert("System Error. Notify the admin!!");	
                 }
             })
         }
     
 