<!DOCTYPE html>
<html>
  <head>
    <title>Tech Future</title>
    <style>

.bottom-right {
        position: fixed;
        bottom: 20px;
        right: 20px;
      }

      .bottom-right a {
        display: inline-block;
        margin-right: 10px;
        font-size: 24px;
        color: white;
        background-color: #211b4d;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
      }
  .text-content {
      position: relative;
    }

    .text-content h1 {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: darkred;
      color: white;
      padding: 5px;
      border-radius: 50%;
      font-size: 1.8rem;
    }

    nav {
      background-color: lightblue;
      overflow: hidden;
    }

    nav ul {
      font-family: Stencil Std, fantasy;
      background-image: url(new.jpg);
      margin: 5;
      padding: 0;
      list-style-type: none;
      display: flex;
      justify-content: space-between;
      text-align: center;
    }

    nav li a {
      display: block;
      color: lightblue;
      text-align: center;
      padding: 30px 30px;
      text-decoration: none;
    }

    nav li a:hover {
      background-image: url(ai.jpg);
      background-position: center center;
      background-size: contain;
      background-color: #133863;
      border-radius: 60%;
      padding: 30px 30px;
    }

    header {
      background-image: url("background.jpg");
      background-size: cover;
      height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    header h1 {
      font-size: 4rem;
      margin-bottom: 0;
    }

    header p {
      font-size: 2rem;
    }

    section {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      flex-wrap: wrap;
      margin-top: 50px;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    section li {
      list-style: none;
      margin: 15px;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
      display: flex;
    }

    section li:hover {
      transform: translateY(-10px);
    }

    section li a {
      display: flex;
      text-decoration: none;
      color: black;
      padding: 20px;
      align-items: center;
    }

    section li h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      flex: 1;
    }

    section li p {
      font-size: 1rem;
      line-height: 1.5;
      flex: 1;
    }

    section li .image-container {
      flex: 1;
      max-width: 50%;
    }

    section li .image-container img {
      width: 80%;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
    }

    .bottom-right {
      position: fixed;
      bottom: 20px;
      right: 20px;
    }

    .bottom-right a {
      display: inline-block;
      margin-right: 10px;
      font-size: 24px;
    }

    .bottom-right button {
      background-color: #211b4d;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .bottom-right button:hover {
      background-color: #133863;
    }

    @media (max-width: 768px) {
      header {
        height: 300px;
      }

      header h1 {
        font-size: 3rem;
      }

      header p {
        font-size: 1.5rem;
      }

      section li {
        width: 90%;
      }

      section li .image-container {
        max-width: 40%;
      }
    }
    </style>
  </head>
  
  <body>
    <nav>
      <ul>
        <li><a href="Register1.php">Register</a></li>
        <li><a href="login1.php">Login</a></li>
        <li><a href="World.php">World News</a></li>
        <li><a href="Market.php">Market News</a></li>
        <li><img src="TechFuture.jpg" alt="Tech Future" height="100" width="100" style="border-radius: 50%;"></li>
        <li><a href="Science.php">Science News</a></li>
        <li><a href="FutureNews.php">Future News</a></li>
        <li><a href="aboutme.php">About Us</a></li>
        <li><a href="view1.php">Settings</a></li>
      </ul>
    </nav>

    <header>
      <h1>Welcome to Tech Future</h1>
      <p>Explore the latest tech news as well as the future tech news</p>
    </header>

    <h1 style="font-size: 3rem; font-family: Bodoni MT; color: #133863; text-shadow: 5px 5px #c4c4c4; text-align: center;">Top 15 News</h1>
    
    <section>
    <li>
    <a href="https://www.macrumors.com/roundup/iphone-15/">
      <div class="image-container">
      <h1>#1 </h1>
        <img src="topics1.webp" alt="Image 1">
      </div>
      <div class="text-content">
        
        <h3>Iphone 15</h3>
        <p>All the rumors about the iphone 15, expected in 2023...</p>
      </div>
    </a>
  </li>
     
  <li>
    <a href="https://www.csmonitor.com/Technology/2016/0906/What-will-artificial-intelligence-look-like-in-15-years">
      <div class="image-container">
      <h1>#2 </h1>
        <img src="topics2.jpg" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>AI intelligence</h3>
        <p>What will artifical intelligence look like in 15 years...</p>
      </div>
    </a>
  </li>

  <li>
    <a href="https://www.gamesradar.com/what-will-games-be-like-in-20-years-2039/">
      <div class="image-container">
      <h1>#3 </h1>
        <img src="topics3.webp" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Games</h3>
        <p>What will gaming look like in 2039...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://builtin.com/robotics/future-robots-robotics">
      <div class="image-container">
      <h1>#4 </h1>
        <img src="topics4.avif" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Robototics</h3>
        <p>The future of robots and robotics...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://www.forbes.com/sites/anniebrown/2021/09/06/is-artificial-intelligence-set-to-take-over-the-art-industry/?sh=117c356133c5">
      <div class="image-container">
      <h1>#5 </h1>
        <img src="topics5.webp" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Art Advancement</h3>
        <p>How and why will AI take over the art industry...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://news.asu.edu/20190405-discoveries-the-future-of-dna-asu-experts">
      <div class="image-container">
      <h1>#6 </h1>
        <img src="topics6.jpg" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Future of DNA</h3>
        <p>how will advancing in DNA help us in our future...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://wyss.harvard.edu/news/saving-the-planet-with-robots-microbes-and-nanotechnology/">
      <div class="image-container">
      <h1>#7 </h1>
        <img src="topics7.webp" alt="Image 2">
      </div>
      <div class="text-content">
        <h3>Harvard Tech</h3>
        <p>Nanotechnology saving the future...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://iapp.org/news/a/researchers-say-privacy-will-vanish-over-next-20-years/#:~:text=The%20Wall%20Street%20Journal%20reports,in%20the%20years%20to%20come.">
      <div class="image-container">
      <h1>#8 </h1>
        <img src="topics8.webp" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Privacy in the future</h3>
        <p>Will technology make us have no privacy or more privacy...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://fstoppers.com/photoshop/ai-technology-future-photographers-590551">
      <div class="image-container">
      <h1>#9 </h1>
        <img src="topics9.webp" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Photographical Advancement</h3>
        <p>what will the future of photos look with such high quality...</p>
      </div>
    </a>
  </li>
  <li>
    <a href="https://www.forbes.com/advisor/investing/cryptocurrency/top-10-cryptocurrencies/">
      <div class="image-container">
      <h1>#10 </h1>
        <img src="topics10.webp" alt="Image 1">
      </div>
      <div class="text-content">
        <h3>Cryptocurrences</h3>
        <p>What cryto to get and all about it...</p>
      </div>
    </a>
  </li>
 
      <li>
        <a href="https://techresearchonline.com/blog/7-futuristic-tech-gadgets-in-2022/">
          <div class="image-container">
            <h1>Exclusive #1</h1>
            <img src="topics11.jpg" alt="Image 1">
          </div>
          <div class="text-content">
            <h3>Tech Gadgets</h3>
            <p>Top 7 tech that will change the future...</p>
          </div>
        </a>
      </li>
      
      <li>
        <a href="https://www.sciencefocus.com/future-technology/future-technology-22-ideas-about-to-change-our-world/">
          <div class="image-container">
            <h1>Exclusive #2</h1>
            <img src="topics12.webp" alt="Image 1">
          </div>
          <div class="text-content">
            <h3>Future Technology</h3>
            <p>Ideas that could advance into reality...</p>
          </div>
        </a>
      </li>
      
      <li>
        <a href="https://venturebeat.com/ai/4-ways-the-future-of-tech-is-the-future-of-autonomy/">
          <div class="image-container">
            <h1>Exclusive #3</h1>
            <img src="topics13.webp" alt="Image 1">
          </div>
          <div class="text-content">
            <h3>Anatomy</h3>
            <p>The future of anatomy</p>
          </div>
        </a>
      </li>
      
      <li>
        <a href="https://www.pcmag.com/news/future-tech-maybe-the-best-concepts-and-prototypes-from-ces-2023">
          <div class="image-container">
            <h1>Exclusive #4</h1>
            <img src="topics14.jpg" alt="Image 1">
          </div>
          <div class="text-content">
            <h3>Cars</h3>
            <p>4 of the best prototypes in cars</p>
          </div>
        </a>
      </li>
      
      <li>
        <a href="https://news.samsung.com/global/samsung-electronics-announces-new-environmental-strategy">
          <div class="image-container">
            <h1>Exclusive #5</h1>
            <img src="topics15.jpg" alt="Image 1">
          </div>
          <div class="text-content">
            <h3>Samsung</h3>
            <p>Samsung in 2050...</p>
          </div>
        </a>
      </li>
      
    </section>
    <div class="bottom-right">
      <a href="futurenews1.php">Hyper Gadget</a>
    </div>
    <footer>
      <p><center>&copy; 2023 Tech Future. All rights reserved.</center></p>
    </footer>
  </body>
</html>