    <footer class="footer">
        <style>
            .footer {
                background: linear-gradient(135deg, var(--primary-color) 0%, #1e3f5a 100%);
                color: white;
                padding: 3rem 0 1rem 0;
                margin-top: 3rem;
            }

            .footer-content {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
                margin-bottom: 2rem;
            }

            .footer-section h3,
            .footer-section h4 {
                margin-bottom: 1rem;
                color: var(--secondary-color);
            }

            .footer-section ul {
                list-style: none;
            }

            .footer-section ul li {
                margin-bottom: 0.5rem;
            }

            .footer-section a {
                color: #ecf0f1;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .footer-section a:hover {
                color: var(--secondary-color);
                padding-left: 0.5rem;
            }

            .social-links {
                display: flex;
                gap: 1rem;
            }

            .social-links a {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background-color: rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .social-links a:hover {
                background-color: var(--secondary-color);
                transform: translateY(-5px);
            }

            .footer-bottom {
                text-align: center;
                padding-top: 2rem;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
                color: #bdc3c7;
            }

            @media (max-width: 768px) {
                .footer-content {
                    grid-template-columns: 1fr;
                }
            }
        </style>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Maputi Private Resort</h3>
                    <p>Your ultimate destination for perfect getaways.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo isset($base_url) ? $base_url : '../'; ?>index.php">Home</a></li>
                        <li><a href="<?php echo isset($base_url) ? $base_url : '../'; ?>pages/rooms.php">Rooms</a></li>
                        <li><a href="<?php echo isset($base_url) ? $base_url : '../'; ?>pages/gallery.php">Gallery</a></li>
                        <li><a href="<?php echo isset($base_url) ? $base_url : '../'; ?>pages/contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>📍 Banay Banay, Lipa City</p>
                    <p>📞 +69 9123456789</p>
                    <p>📧 Maputi@resort.com</p>
                </div>
                
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 Maputi Private Resort . All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script src="<?php echo $base_url ?? './'; ?>assets/js/script.js"></script>
</body>
</html>