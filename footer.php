 <!-- FOOTER STARTS -->
 <footer>
     <div class="container">
         <div class="col_01">
             <h3>Quick Links</h3>
             <div class="f_link"> <a href="#">Home</a> <a href="#">About Us</a> <a href="#">Products</a> <a href="#">Product
                     Gallery</a> <a href="#">Presence</a> <a href="#">Contact Us</a> <a href="#">Sitemap</a> </div>
         </div>
         <div class="col_02">
             <h3>Our Operations</h3>
             <div class="f_link">
                 <span>Manufacturer</span>
                 <span>Exporter</span>
                 <span>Supplier</span>
                 <span>Bio-Energy Solutions</span>
                 <span>Eco-Friendly Products</span>
                 <a href="#" class="btn-link">View All Products</a>
             </div>
         </div>
         <div class="col_03">
             <h3>Contact Info</h3>
             <div class="f_contact_con">
                 <p><i class="fa fa-map-marker"></i> Shop No. 107, 1st Floor, Siddarth Arcade,<br>
                     Station Road, Aurangabad,<br>
                     Maharashtra, India - 431001</p>
                 <p><i class="fa fa-phone"></i> 9449045440 / 9371444466</p>
                 <p><i class="fa fa-envelope"></i> <a href="mailto:info@g-squarebioenergy.com">info@g-squarebioenergy.com</a>
                 </p>
                 <p><i class="fa fa-id-card"></i> GST No.: 27ABDFG6964Z1E</p>
                 <p><i class="fa fa-user"></i> Contact: Gautam Arwade (Director)</p>
             </div>
         </div>
         <div class="col_04 hidden-sm hidden-xs">
             <h3>Reach Us</h3>
             <div class="map">
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.128554153372!2d75.3326350748936!3d19.876890881502568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9861a6d01f43%3A0x3a1c932f3e3c5c9f!2sStation%20Road%2C%20Aurangabad%2C%20Maharashtra%20431001!5e0!3m2!1sen!2sin!4v1641234567890!5m2!1sen!2sin"
                     width="100%" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
             <a href="https://www.google.com/maps/place/Station+Road,+Aurangabad,+Maharashtra+431001" target="_blank"
                 class="mt5 dib ml5" style="color:#fff;">Get Direction</a>
         </div>
         <div class="clearfix"></div>
     </div>
     <div class="pwrd">
         <div class="container">
             <div class="f_social_midea_con">
                 <a href="#"><i class="fa fa-facebook"></i></a>
                 <a href="#"><i class="fa fa-twitter"></i></a>
                 <a href="#"><i class="fa fa-linkedin"></i></a>
                 <a href="#"><i class="fa fa-youtube-play"></i></a>
                 <a href="#"><i class="fa fa-google-plus"></i></a>
             </div>
             <p class="text-white" style="color: white; font-size: medium;">© 2025, G-Square Bio Energy | All Rights Reserved
                 <span class="">Managed By <a style="color: rgb(14, 17, 223); font-size: medium;"
                         href="https://trade4export.com" target="_blank">Trade4Export</a></span>
             </p>
             <div class="clearfix"></div>
         </div>
     </div>
 </footer>
 <p id="back-top"> <a href="#top" class="btn btn-success trans_eff"><i class="fa fa-angle-up"></i></a></p>
 <!-- FOOTER ENDS -->

 <!-- HTML Modal -->
 <div id="enquiryModal" class="modal">
     <div class="modal-content">
         <button class="close-btn" onclick="closeModal()">×</button>
         <h2>Enquiry Form</h2>
         <form id="whatsappFormModal" class="modal-form">
             <input type="text" placeholder="Your Name *" required>
             <input type="email" placeholder="Your Email *" required>
             <input type="tel" placeholder="Your Phone Number">
             <input type="text" placeholder="Subject">
             <textarea rows="4" placeholder="Your Message *" required></textarea>
             <button type="submit">Send via WhatsApp</button>
         </form>
     </div>
 </div>
 <!-- JS for Modal -->
 <script>
     const modal = document.getElementById('enquiryModal');

     function openModal() {
         modal.style.display = 'block';
     }

     function closeModal() {
         modal.style.display = 'none';
     }

     // Close modal when clicking outside content
     window.onclick = function(event) {
         if (event.target === modal) {
             closeModal();
         }
     }
 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
     crossorigin="anonymous"></script>
 <script src="Scripts/jquery-1.11.3.min.js"></script>
 <script src="Scripts/bootstrap.min.js"></script>
 <script src="Scripts/helpers.min.js"></script>
 <script src="Scripts/function.js"></script>

 <!-- whatsapp messeging -->
 <script>
     document.getElementById("whatsappForm").addEventListener("submit", function(e) {
         e.preventDefault();

         // Form values
         let name = document.querySelector('input[placeholder="Your Name *"]').value;
         let email = document.querySelector('input[placeholder="Your Email *"]').value;
         let phone = document.querySelector('input[placeholder="Your Phone Number"]').value;
         let subject = document.querySelector('input[placeholder="Subject"]').value;
         let message = document.querySelector('textarea').value;

         // WhatsApp number (country code ke sath)
         let whatsappNumber = "919449045440"; // <-- apna number yahan daalein

         let whatsappMessage =
             `*New Contact Form Message*%0A%0A` +
             `*Name:* ${name}%0A` +
             `*Email:* ${email}%0A` +
             `*Phone:* ${phone}%0A` +
             `*Subject:* ${subject}%0A` +
             `*Message:* ${message}`;

         let whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

         window.open(whatsappURL, "_blank");
     });
 </script>

 <!-- enquiry modal -->
 <script>
     document.getElementById("whatsappFormModal").addEventListener("submit", function(e) {
         e.preventDefault();

         let name = this.querySelector('input[placeholder="Your Name *"]').value;
         let email = this.querySelector('input[placeholder="Your Email *"]').value;
         let phone = this.querySelector('input[placeholder="Your Phone Number"]').value;
         let subject = this.querySelector('input[placeholder="Subject"]').value;
         let message = this.querySelector('textarea').value;

         let whatsappNumber = "919449045440"; // <-- apna number yahan daalein

         let whatsappMessage =
             `*New Enquiry Form Message*%0A%0A` +
             `*Name:* ${name}%0A` +
             `*Email:* ${email}%0A` +
             `*Phone:* ${phone}%0A` +
             `*Subject:* ${subject}%0A` +
             `*Message:* ${message}`;

         let whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

         window.open(whatsappURL, "_blank");

         // Close modal after submit using Bootstrap method
         let modalEl = document.getElementById('enquiryModal');
         let modal = bootstrap.Modal.getInstance(modalEl);
         modal.hide();

         // Reset form
         this.reset();
     });
 </script>

 </body>

 </html>