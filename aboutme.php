<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style>
		 
		.container {
			width: 1300px;
			margin: 0 auto;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			background-color:lightblue;
        
		}

		.container h1 {
			text-align: center;
			margin-bottom: 30px;
			color: #333;
			font-size: 36px;
		}

		.website-info {
			margin-bottom: 30px;
		}

		.website-info h2 {
			margin-top: 0;
			color: #007bff;
			font-size: 24px;
		}

		.website-info ul {
			margin-top: 10px;
			color: #333;
			font-size: 16px;
		}

		.website-info li {
			margin-bottom: 5px;
		}

		.person-container {
			display: flex;
			justify-content: space-between;
			margin-bottom: 30px;
			flex-wrap: wrap;
			
		}

		.person {
			width: 15%;
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 10px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			background-color: white;
		}

		.person img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			object-fit: cover;
			margin-bottom: 10px;
		}

		.person-details {
			text-align: center;
		}

		.person-details h2 {
			margin: 0;
			color: #333;
			font-size: 20px;
		}

		.person-details p {
			margin-top: 10px;
			color: #333;
			font-size: 16px;
			max-height: 150px;
			overflow-y: scroll;
		}

		.person-details a {
			text-decoration: none;
			color: #333;
			transition: color 0.3s;
		}

		.person-details a:hover {
			color: #007bff;
		}

		.fancy-heading {
			margin-top: 0;
			color: #007bff;
			font-size: 36px;
			font-family: "Arial Black", sans-serif;
			text-transform: uppercase;
			text-align: center;
		}

		.fancy-text {
			margin-top: 10px;
			color: #333;
			font-size: 18px;
			font-family: "Helvetica", sans-serif;
			text-align: justify;
			text-indent: 50px;
		}
		.button {
			position: fixed;
			bottom: 20px;
			right: 20px;
			background-color: darkcyan;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 16px;
			text-decoration: none;
		}

		.vision-mission-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
  background-color: white;
}

.mission,
.vision {
  display: flex;
  align-items: center;
}

.mission-text,
.vision-text {
  flex: 1;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.mission-text h2,
.vision-text h2 {
  color: #007bff;
  font-size: 24px;
  text-align: center;
}

.mission-paragraph p,
.vision-paragraph p {
  color: #333;
  font-size: 16px;
  margin: 15px 0;
  width: 800px;
}

.mission-image,
.vision-image {
  flex: 1;
  text-align: center;
}

.mission-image img,
.vision-image img {
  border-radius: 50%;
  object-fit: cover;
  width: 400px;
  height: 400px;
}
.goals {
			display: flex;
			align-items: center;
			margin-bottom: 30px;
			background-color: white;
		}

		.goals-image {
			flex: 1;
			text-align: center;
		}

		.goals-image img {
			border-radius: 50%;
			object-fit: cover;
			width: 400px;
			height: 400px;
		}

		.goals-text {
			flex: 1;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			
		}
		footer {
        background-color: white;
        color: black;
        padding: 10px;
		
        text-align: center;
      }
	</style>
</head>
<body>
	<div class="container">
		<h1>About Us</h1>

		<div class="vision-mission-container">
  <div class="mission">
    <div class="mission-text">
      <h2>Mission</h2>
      <div class="mission-paragraph">
	  <p>- Empower individuals and businesses to navigate and thrive in the evolving world of technology.</p>
	  <p>- make everything have inclusivity and accessibility, ensuring that technology is accessible to everyone.</p>
        <p>- Our mission is to provide comprehensive and reliable tech-related information to empower individuals and businesses.</p>
      </div>
      <div class="mission-paragraph">
        <p>- We aim to inspire and educate our audience through engaging content, expert analysis, and thought-provoking discussions.</p>
      </div>
      <div class="mission-paragraph">
        <p>- By having a community of tech enthusiasts, we strive to facilitate knowledge sharing and drive innovation in the tech industry.</p>
      </div>
    </div>
    <div class="mission-image">
      <img src="Mission.jpg" alt="Mission Image">
    </div>
  </div>
  <div class="vision">
    <div class="vision-image">
      <img src="Vision.png" alt="Vision Image">
    </div>
    <div class="vision-text">
      <h2>Vision</h2>
      <div class="vision-paragraph">
		<p> - Drive technological advancements by showcasing emerging trends, breakthrough innovations, and best practices.</p>
        <p>- Our vision is to be the leading destination for accurate and up-to-date tech news, delivering cutting-edge insights.</p>
      </div>
      <div class="vision-paragraph">
	  <p>- Create a platform that connects individuals, businesses, and experts, fostering a global tech community.</p>
        <p>- We strive to make our content universal and accessible to all, regardless of background or expertise, and to influence curiosity and innovation in the world of technology.</p>
      </div>
    </div>
  </div>
</div>
<div class="goals">
			<div class="mission-text">
				<h2>Goals</h2>
				<div class="mission-paragraph">
					<p>Our goals are to:</p>
				</div>
				<div class="mission-paragraph">
					<p>- Develop a user-friendly platform with intuitive navigation and advanced search functionality.</p>
				</div>
				<div class="mission-paragraph">
					<p>- Provide accurate and up-to-date tech news and insights.</p>
				</div>
				<div class="mission-paragraph">
					<p>- Inspire curiosity and innovation in the world of technology.</p>
				</div>
				<div class="mission-paragraph">
					<p>- Create engaging content that educates and empowers individuals and businesses.</p>
				</div>
				<div class="mission-paragraph">
					<p>- Measure and track the impact of our platform, continuously improving and adapting to meet the evolving needs of our users.</p>
				</div>
				<div class="mission-paragraph">
					<p>- Partner with organizations and initiatives aligned with our mission to amplify our impact and reach.</p>
				</div>
			</div>
			<div class="goals-image">
				<img src="goals.png" alt="Goals Image">
			</div>
		</div>

		<h1><center>Meet The Team</center></h1>

		<div class="person-container">
			<div class="person">
				<img src="linkedIn.jpeg" alt="Person 1">
				<div class="person-details">
					<h2>Ashley</h2>
					<p>Lead Developer</p>
					<p>Brooklyn, NY</p>
					<a href="https://www.linkedin.com/in/ashley-serrano-a89b6b16a/" target="_blank" rel="noopener noreferrer">Ashley's LinkedIn</a><br>
					<a href="mailto:ashleyvaneserrano@gmail.com">Send an email</a>
					<p>Hello! I'm Ashley, a passionate and motivated Computer Programming & Software Development student currently enrolled at LaGuardia Community College. I am dedicated to expanding my knowledge and skills in this field. Throughout my academic journey, I have gained proficiency in various programming languages such as HTML, C++, and Linux/Unix. My coursework has equipped me with hands-on experience in developing and debugging software applications, as well as collaborating effectively within a team.</p>
				</div>
			</div>

			<div class="person">
				<img src="WF.jpg" alt="Person 2">
				<div class="person-details">
					<h2>William</h2>
					<p>Data Scientist</p>
					<p>Jamaica, NY</p>
					<a href="https://www.linkedin.com/in/william-furs-4059b0a0" target="_blank" rel="noopener noreferrer">William's LinkedIn</a><br>
					<a href="mailto:wfurs1024@gmail.com">Send an email</a>
					<p>Hi, I am William. Growing up, technology always intrigued me, which led me to pursue a career in programming and software development. Continuous learning is at the core of my journey as a tech enthusiast. I actively seek out opportunities to expand my knowledge and enhance my skill set.</p>
				</div>
			</div>

			<div class="person">
				<img src="image0.PNG" alt="Person 3">
				<div class="person-details">
					<h2>Jack</h2>
					<p>Website Designer</p>
					<p>Queens, NY</p>
					<a href="https://www.linkedin.com/in/jack-zheng-562072236/" target="_blank" rel="noopener noreferrer">Jack's LinkedIn</a><br>
					<a href="mailto:sleepztrade1.com">Send an Email</a>
					<p>I have a very big passion for tech, I plan to expand my knowledge in different areas as well as make a hobby out of it. The harder it is, the more fun it is to beat the challenge. Beyond the technical aspects, I strongly believe in the importance of effective communication and teamwork. I thrive in collaborative environments where diverse minds come together to create something extraordinary.</p>
				</div>
			</div>

			<div class="person">
				<img src="birat2.jpeg" alt="Person 4">
				<div class="person-details">
					<h2>Birat</h2>
					<p>Project Manager</p>
					<p>Queens, NY</p>
					<a href="https://www.linkedin.com/in/birat-shrestha-87050221b/" target="_blank" rel="noopener noreferrer">Birat's LinkedIn</a><br>
					<a href="mailto:Birat4.com">Send an Email</a>
					<p>Hi everyone I am Birat.I have a solid foundation in computer science, I possess a comprehensive understanding of various programming languages, data structures, and algorithms. This knowledge allows me to craft elegant and efficient solutions to complex problems. I'm particularly drawn to software development and take pleasure in building robust applications that provide seamless user experiences.</p>
				</div>
			</div>

			<div class="person">
				<img src="person.jpg" alt="Person 5">
				<div class="person-details">
					<h2>Rida</h2>
					<p>IT Specialist</p>
					<p>Queens, NY</p>
					<a href="https://www.linkedin.com/in/joe-doe-32a205a3?trk=people-guest_people_search-card" target="_blank" rel="noopener noreferrer">Rida's LinkedIn</a><br>
					<a href="mailto:ridaarayane@gmail.com">Send an Email</a>
					<p>Hello this is Rida. I'm a born and raised New Yorker who has always had a passion for tech and science. In addition to coding, I'm captivated by emerging technologies such as artificial intelligence, machine learning, and blockchain. I'm constantly staying up-to-date with the latest advancements.</p>
				</div>
			</div>
		</div>
	</div>
	<a href="tech.php" class="button">Go to Home</a>

	<footer>
      <p><center>&copy; 2023 Tech Future. All rights reserved.</center></p>
    </footer>
</body>
</html>