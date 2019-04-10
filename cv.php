<?php
function display($string){
    global $output,$language;
    echo $output[$language][$string];
}

if(isset($_GET["language"]) && ($_GET["language"]=="en" || $_GET["language"]=="nl" )){
    $language = $_GET['language'];
}
else{
    $language = "nl";
}

$output["en"]["intro-name"] = "Maarten Waegeman";
$output["nl"]["intro-name"] = "Maarten Waegeman";
$output["en"]["intro-craft"] = "Developer";
$output["nl"]["intro-craft"] = "Developer";

$output["en"]["intro-curious"] = "and a generally curious being";
$output["nl"]["intro-curious"] = "en leergierig wezen";
$output["en"]["intro-young"] = "I am a 31 year young individual from Opwijk in Belgium (close to Brussels). After finishing my studies in Applied Computer Sciences, I started my career as a Technical Consultant.";
$output["nl"]["intro-young"] = "Ik ben 31 jaar jong en afkomstig uit Opwijk (dicht tegen Brussel). Ik startte mijn carrière als Technical Consultant na mijn studie Toegepaste Informatica te hebben voltooid.";
$output["en"]["intro-projectexp"] = "I have worked on projects for large organisations in both the public and private sector, mostly in large teams. More recently, I have been working abroad in Denmark as part of a tight-knit team for a startup.";
$output["nl"]["intro-projectexp"] = "Ik heb ervaring in projectwerk voor grote organisaties, zowel in de publieke als in de private sector en voornamelijk in een groot team. Maar recenter heb ik deel uitgemaakt van een klein team voor een startup in Denemarken.";
$output["en"]["intro-biggestkick"] = "Finding a working solution to a complex problem gives me a big kick. I constantly look to challenge myself, so am always keen on learning something new and trying out innovative technologies.";
$output["nl"]["intro-biggestkick"] = "Mijn grootste kick, die krijg ik van een werkbare oplossing te vinden voor een complex probleem. Ik daag mezelf graag uit, ben leergierig en hou er van om de nieuwste technologische snufjes uit te proberen.";
$output["en"]["intro-freetime"] = "I enjoy life and love to be around family and friends. I am professional and have a positive attitude and I enjoy a good joke once in a while. In my free time I enjoy meeting up with friends, playing the trumpet and I enjoy reading a good book or watching a good movie.";
$output["nl"]["intro-freetime"] = "Ik ben sociaal en hou van mijn vrienden en familie. Ik ben professioneel en positief ingesteld en ik weet een goeie grap nu en dan te appreciëren. In mijn vrije tijd spreek ik af met vrienden, speel ik trompet en hou ik van een goed boek of een spannende film.";


$output["en"]["title-workexp"] = "Job Experience";
$output["nl"]["title-workexp"] = "Werk Ervaring";

$output["en"]["jobtitle-livemanager"] = "Lead Frontend Developer";
$output["nl"]["jobtitle-livemanager"] = "Lead Frontend Developer";
$output["en"]["jobinfo-livemanager"] = "Live Manager - Denmark, 2014 - 2018";
$output["nl"]["jobinfo-livemanager"] = "Live Manager - Denemarken, 2014 - 2018";
$output["en"]["jobdescription-livemanager"] = "At Live Manager I was responsible for the entire Front End. My daily workload included bugfixes, analysing and implementing new features and design changes and testing and deploying new builds. My biggest accomplishments at Live Manager were the succesful implementation of a new live-feed, social wall with twitter integration and a complete overhaul of the Front End.";
$output["nl"]["jobdescription-livemanager"] = "Bij Live Manager was ik eindverantwoordelijk voor de hele Front End. Mijn dagelijks takenpakket bestond o.a. uit bugfixes, analyseren en implementeren van nieuwe features en design changes, testen en deployen van nieuwe builds. Mijn grootste verwezelijkingen bij Live Manager waren het ontwikkelen van een nieuwe live-feed, social wall met twitter integratie en een complete overhaul van de Front End.";
$output["en"]["jobtechnologies-livemanager"] = "(HTML &amp; Css, JavaScript, Backbone &amp;Marionette.js, Python, Postgresql, Vagrant & Ansible)";
$output["nl"]["jobtechnologies-livemanager"] = "(HTML &amp; Css, JavaScript, Backbone &amp;Marionette.js, Python, Postgresql, Vagrant & Ansible)";

$output["en"]["jobtitle-hp"] = "Technology Consultant";
$output["nl"]["jobtitle-hp"] = "Technology Consultant";
$output["en"]["jobinfo-hp"] = "HP - Belgium, 2011 - 2014";
$output["nl"]["jobinfo-hp"] = "HP - België, 2011 - 2014";
$output["en"]["jobdescription-hp"] = "As a Technology Consultant for HP I worked on several projects for the Belgian and Flemish government. My responsibilities varied from project to project but included: Peoplesoft development and support, monitoring, user interface design and analysing, implementing and testing of change requests.";
$output["nl"]["jobdescription-hp"] = "Als Technology consultant werkte ik op verschillende projecten voor de Belgische en Vlaamse Overheid. Mijn taken varieerden van project tot project, maar hielden onder meer in: Peoplesoft development en support, monitoring, user interface design en analyse, implementeren en testen van change requests.";
$output["en"]["jobtechnologies-hp"] = "(Peoplesoft, Java, HTML &amp; Css, JavaScript, Oracle DB)";
$output["nl"]["jobtechnologies-hp"] = "(Peoplesoft, Java, HTML &amp; Css, JavaScript, Oracle DB)";

$output["en"]["jobtitle-a2z"] = "Software Engineer (Internship)";
$output["nl"]["jobtitle-a2z"] = "Software Engineer (Stage)";
$output["en"]["jobinfo-a2z"] = "Econocom N.V. - Belgium, 2010";
$output["nl"]["jobinfo-a2z"] = "Econocom N.V. - België, 2010";
$output["en"]["jobdescription1-a2z"] = "With my internship partner I worked on several projects including";
$output["nl"]["jobdescription1-a2z"] = "Met mijn stagepartner werkte ik verschillende projecten uit";
$output["en"]["jobdescription2-a2z"] = "Development of a custom hardware inventory management software, complete with a barcode scanner.";
$output["nl"]["jobdescription2-a2z"] = "Ontwikkeling van een custom hardware inventory management software, compleet met een barcode scanner.";
$output["en"]["jobdescription3-a2z"] = "Redesigned and added usability to A2Z’s Tell Me More reporting website &amp; sales tool.";
$output["nl"]["jobdescription3-a2z"] = "Herontwikkeling en extra functionaliteit van A2Z’s Tell Me More reporting website &amp; sales tool.";
$output["en"]["jobdescription4-a2z"] = "Rollout of Dell Management Console Software on a network with 1K+ nodes.";
$output["nl"]["jobdescription4-a2z"] = "Rollout van Dell Management Console Software op een netwerk van 1000+ nodes.";
$output["en"]["jobtechnologies-a2z"] = "(HTML &amp; CSS, JavaScript, MS SQL &amp; C# .Net, Dell Management Console)";
$output["nl"]["jobtechnologies-a2z"] = "(HTML &amp; CSS, JavaScript, MS SQL &amp; C# .Net, Dell Management Console)";

$output["en"]["jobtitle-oxynade"] = "Content Administrator (Student job)";
$output["nl"]["jobtitle-oxynade"] = "Content Administrator (Studentenjob)";
$output["en"]["jobinfo-oxynade"] = "Oxynade - Belgium, 2008 - 2009";
$output["nl"]["jobinfo-oxynade"] = "Oxynade - België, 2008 - 2009";
$output["en"]["jobdescription-oxynade"] = "I was responsible for configuring the inhouse crawler and parser tools, allowing event data to be harvested and processed from target event websites.";
$output["nl"]["jobdescription-oxynade"] = 'Ik was verantwoordelijk voor de configuratie van de inhouse crawler en parser tools, zodat event data "geharvest" en verwerkt konden worden van target event websites.';
$output["en"]["jobtechnologies-oxynade"] = "(HTML, PHP , Regex)";
$output["nl"]["jobtechnologies-oxynade"] = "(HTML, PHP , Regex)";


$output["en"]["title-education"] = "Education";
$output["nl"]["title-education"] = "Opleiding";

$output["en"]["education-place-oracle"]="Oracle University";
$output["nl"]["education-place-oracle"]="Oracle University";
$output['en']["education-name-oracle"] = "Peopletools Developer Expert Certification, 2012";
$output['nl']["education-name-oracle"] = "Peopletools Developer Expert Certification, 2012";
$output['en']["education-description-oracle"] = "PeopleTools I &amp; PeopleTools II, PeopleCode &amp; Application Engine";
$output['nl']["education-description-oracle"] = "PeopleTools I &amp; PeopleTools II, PeopleCode &amp; Application Engine";

$output["en"]["education-place-itmanagement"]="University College Ghent";
$output["nl"]["education-place-itmanagement"]="Hogeschool Gent";
$output['en']["education-name-itmanagement"] = "Postgraduate, IT-Management, 2010 - 2011";
$output['nl']["education-name-itmanagement"] = "Postgraduaat, IT-Management, 2010 - 2011";
$output['en']["education-description-itmanagement"] = "Option Multimedia as specialisation.";
$output['nl']["education-description-itmanagement"] = "Optie Multimedia als specialisatie.";

$output["en"]["education-place-toegepasteinformatica"]="University College Ghent";
$output["nl"]["education-place-toegepasteinformatica"]="Hogeschool Gent";
$output['en']["education-name-toegepasteinformatica"] = "B.A.Sc. Applied Computer Science, 2007 - 2010";
$output['nl']["education-name-toegepasteinformatica"] = "B.A.Sc. in Toegepaste Informatica - Netwerken, 2007 - 2010";
$output['en']["education-description-toegepasteinformatica"] = 'Passed with Second Class Honours <br>Internship at Econocom, passed with First Class Honours<br>Scription “A trip through the modern enterpriseworld.” (2010)<br>Option Networking as specialisation.';
$output['nl']["education-description-toegepasteinformatica"] = 'Geslaagd met Onderscheiding<br>Stage bij Econocom, geslaagd met Grote Onderscheiding<br>Scriptie "Een reis door de moderne bedrijfswereld." (2010)<br>';

$output["en"]["side-title-contactinfo"] = "Contact info";
$output["nl"]["side-title-contactinfo"] = "Contact info";

$output["en"]["side-email"] = "maarten.waegeman@skynet.be";
$output["nl"]["side-email"] = "maarten.waegeman@skynet.be";
$output["en"]["side-phone"] = "+32 471 74 53 14";
$output["nl"]["side-phone"] = "+32 471 74 53 14";
$output["en"]["side-address"] = "Eeksken 198, 1745 Opwijk";
$output["nl"]["side-address"] = "Eeksken 198, 1745 Opwijk";
$output["en"]["side-linkedin"] = "www.linkedin.com/in/maartenwaegeman";
$output["nl"]["side-linkedin"] = "www.linkedin.com/in/maartenwaegeman";

$output["en"]["side-title-skills"] = "Skills";
$output["nl"]["side-title-skills"] = "Skills";

$output["en"]["side-title-programming"] = "Programming";
$output["nl"]["side-title-programming"] = "Programming";
$output["en"]["side-programming"] = "I am experienced in PHP, Javascript, Python, Java, and PeopleSoft. I have also programmed in .Net (C#) and have some basic knowledge of C++.";
$output["nl"]["side-programming"] = "Ik heb o.a. ervaring in PHP, Javascript, Python, Java en PeopleSoft. Ik heb ook geprogrammeerd in .Net (C#) en heb een basiskennis van C++.";

$output["en"]["side-title-web"] = "Web Technology";
$output["nl"]["side-title-web"] = "Web Technology";
$output["en"]["side-web"] = "I have experience in Web- and UI-design and development, different frameworks, webservices, version control and CI/CD. Some of the tools I have used include HTML5, CSS, Laravel, Backbone, PHPUnit, Git, Grunt, Karma, Jenkins and CircleCI. I have started learning Angular recently.";
$output["nl"]["side-web"] = "Ik heb ervaring in Web- en UI-design en development, verschillende frameworks, webservices, version control en CI/CD. Zo heb ik o.a. gewerkt met HTML5, CSS, Laravel, Backbone, PHPUnit, Git, Grunt, Karma, Jenkins en CircleCI. Recent ben ik begonnen met Angular te leren. ";

$output["en"]["side-title-tools"] = "Tools";
$output["nl"]["side-title-tools"] = "Tools";
$output["en"]["side-tools"] = "I have experience in Linux (Ubuntu, Rapsbian &amp; Fedora) and I am familiar with CLI tools and Bash scripting. I know how to setup a full development (CI/CD) pipeline with Git and Jenkins. On the virtualisation front I have worked with among other things tools like Virtualbox, Vagrant and Docker.";
$output["nl"]["side-tools"] = "Ik heb ervaring in Linux (Ubuntu, Raspbian &amp; Fedora) en ben vertrouwd met CLI tools en Bash scripten. Ik weet hoe een volledige development (CI/CD) pipeline op te zetten met Git en Jenkins. Op virtualisation vlak heb ik gewerkt met tools zoals o.a. Virtualbox, Vagrant en Docker.";

$output["en"]["side-title-databases"] = "Databases";
$output["nl"]["side-title-databases"] = "Databases";
$output["en"]["side-databases"] = "I have experience in MS SQL, Oracle DB, Postgresql and MySQL. While developing, I have used ORM mappers on multiple occasions in Laravel.";
$output["nl"]["side-databases"] = "Ik heb ervaring in MS SQL, Oracle DB, Postgresql en MySQL. Ik heb ORM mappers verschillende malen gebruikt, bvb. tijdens ontwikkelingen in Laravel.";

$output["en"]["side-title-languages"] = "Languages";
$output["nl"]["side-title-languages"] = "Talen";
$output["en"]["side-languages"] = "My native language is Dutch. I also have a full professional proficiency of English, a professional working proficiency of French and an elementary proficiency of German and Danish.";
$output["nl"]["side-languages"] = "Mijn moedertaal is Nederlands. Ik heb een heel goede kennis van het Engels en een goede kennis van het Frans, beiden spreken, lezen en schrijven. Ik heb een basiskennis van het Duits en Deens.";

include("template.php");