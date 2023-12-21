<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="homePage.css">
    <title>Train Monitoring System</title>
</head>
<body>

<header>
    <h1>Train and Railway Monitoring System</h1>
</header>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">System Overview Page</a></li>
        <li><a href="#">Maintenance Page Infromation</a></li>
        <li><a href="#">Condition Monitoring Page </a></li>
        <li><a href="#">About Us</a></li>
    </ul>
</nav>

<main>
    <section id="main-content">
        <h2>Welcome to our Train Monitoring System</h2>
        <p>This system provides real-time information about maintenance and conditionn of trains and railways</p>

        <div id="conditionTable" class="content-container">
            <div id="trainDataTable" class="table-container">
                <h3>Train Conditions</h3>
                <h5>(Updated 2 minutes ago)</h5>
                <table>
                    <thead>
                        <tr>
                            <th>Train ID</th>
                            <th>Destination</th>
                            <th>Condition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Add dynamic data here
                        echo "<tr><td>001</td><td>Singapore</td><td>In Operation</td></tr>";
                        echo "<tr><td>002</td><td>Johor</td><td>In Operation</td></tr>";
                        echo "<tr><td>003</td><td>-</td><td>Under Maintenance</td></tr>";
                        // Add more rows as needed
                        ?>
                    </tbody>
                </table>
            </div>

            <div id="railwayDataTable" class="table-container">
                <h3>Railway Conditions</h3>
                <h5>(Updated 2 minutes ago)</h5>
                <table>
                    <thead>
                        <tr>
                            <th>Railway ID</th>
                            <th>Location</th>
                            <th>Condition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Add dynamic data here
                        echo "<tr><td>R001</td><td>Johor - Singapore</td><td>Normal</td></tr>";
                        echo "<tr><td>R002</td><td>KL - Johor</td><td>Normal</td></tr>";
                        echo "<tr><td>R003</td><td>Johor - KL</td><td>Under Maintenance</td></tr>";
                        // Add more rows as needed
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Destination Meters -->
    <div class="destination-meter-container">
        <h2>Train Destination Meter </h2>
        
        <!-- Meter for Train 001 -->
        <div class="meter meter-train-001">
            <div class="fill">
                <h3>Train 001</h3>
            </div>
        </div>

        <!-- Meter for Train 002 -->
        <div class="meter meter-train-002">
            <div class="fill">
                <h3>Train 002</h3>
            </div>
        </div>

        <!-- Meter for Train 003 -->
        <div class="meter meter-train-003">
            <div class="fill">
                <h3>Train 003</h3>
            </div>
        </div>
    </div>
</main>

</body>

</html>



