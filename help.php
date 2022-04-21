<!DOCTYPE html>
<html lang="en">
<head>
<title>Help Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="main.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <header><h1><a href="index.php">IT Tech Support</a></h1></header>
    <nav>
        <ul>
        <li><a href=".?action=home">Home</a></li>
            <li><a href=".?action=login">Login</a></li>
            <li><a href=".?action=login">Help</a></li>
            <li><a href=".?action=end">Logout</a></li>
        </ul>
    </nav>
    <div id="back">
        <main>
            <h2>Help Pge</h2>
            <div id="right"><p>This is a video by Cobuman made in 2018 detailing the more common issues.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Fza_ykzypGU" 
                allowfullscreen></iframe>
            <p> In the event the video does not load here is the link: <ul><li><a href="https://www.youtube.com/watch?v=Fza_ykzypGU">https://www.youtube.com/watch?v=Fza_ykzypGU</a></ul></li></p>
            </div>
            <p> <?php echo'Your Case Number is: '. $random ?> 
                <ul>
                    <li>Help Sites</li>
                    <li><a href="https://www.rednightconsulting.com/6-common-computer-issues-fix/">6 Common Computer Fixes</a></li>
                    <li><a href="https://www.arcsystems.co.uk/common-computer-faults-and-how-you-can-solve-them/">Common Faults and how to solve them</a></li>
                    <li><a href="https://www.makeuseof.com/tag/how-to-test-your-pc-for-failing-hardware/">How to check for Hardware failure</a></li>
                </ul>
            
            </p>
                
                </main>
                </div>
    </div>
    <footer>Copyright &copy; 2022 Steven Covington</footer>
    
</body>
