<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CSS genreFilm</title>


    <style>
        
        body {
            background-color: #fff;
            color: #FFFFFF;
            font: 1.2em / 1.5 Helvetica Neue, Helvetica, Arial, sans-serif;
            padding: 0;
            margin: 0;
        }

        img {
            max-width: 100%;
        }

        .cards {
            background-color: #ffffff;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            grid-gap: 20px;
            max-width: 800px;
            margin: 1em auto;
        }

        .card {
            background-color: #000000;
            display: grid;
            grid-template-rows: max-content 200px 1fr;
            border: 1px solid #999;
            border-radius: 3px;
        }

        .card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .card h2 {
            margin: 0;
            padding: .5rem;
        }

        .card .content {
            padding: .3rem;
        }

        .card footer {
            background-color: #333;
            color: #fff;
            padding: .5rem;
        }
    </style>

</head>

<body>
    <div class="cards">
        <article>
            <?php
			foreach ($films as $film){ ?>
            <div class="content">
            <br></br>   
			<div class="card">
				<center> <p><?php echo $film->getTitre(); ?> </p> </center>
				<center> <p> <?php echo $film->getSynopsis(); ?> </p> </center>
				<center> <p>Réalisateur(s): <?php echo $film->getRealisateur(); ?> </p> </center>
			</div>

			<?php
			}
			?>
            </div>

        </article>

    </div>

</body>

</html>