<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/title-bar.css" />
    <link rel="stylesheet" type="text/css" href="/css/resume.css" /> 
    <title>
        Erik Wright's Resume
    </title>
</head>
<body>
	<?php include('../title-bar/title-bar.html');
	?>

    <div class="resume" id="PageContent">
        <table >
            <tr >
               <td><h1>Erik J. Wright</h1></td> 
                <td><h4>ejwright@pdx.edu</h4></td>
            </tr>
        </table>
        <table >
            <col width="20%" />
            <col width="80%" />
    
            <tr >
                <td><h2>EDUCATION</h2></td>
                <td><h3>Portland State University</h3></td>
            </tr>
            <tr >
                <td><p>Graduated 2016</p></td>
                <td><p>Bachelor of Science - Computer Engineering (Embedded Systems)</p></td>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr >
                <td>
                <h2 >LANGUAGES</h2>
                    <p>Assembly</p>
                    <p>HDL</p>
                    <p>Editors</p>
                </td>
                <td><p>C, C++, C#, Python</p>
                    <p>ARM, MIPS, x86,</p>
                    <p>Verilog, System Verilog</p>
                    <p>Vim, gedit, Microsoft Visual Studio</p>
                </td>
            </tr>
        </table>
        <table >
            <col width="20%" />
            <col width="80%" />
            
            <tr >
                <td colspan="2"><h2 >PROJECTS</h2></td>
            </tr>
            <tr >
                <td><p>PDP-11 Simulator</p></td>
                <td><p>
                    Used the original documentation for Digital Equipment Corporation's PDP-11 to create a 
                    16-bit word addressable instruction set simulator using C. <br />
                    Concepts Involved:  RISC Architectures, Instruction Addressing Modes, Architectural Design Constraints
                </p></td>
            </tr>
                <td><p>Branch Prediction Performance Analyzer</p></td>
                <td><p>
                    Implemented a Local/Global Branch Prediction Unit Performance Analysis Tool using C.<br />
                    Concepts Involved:  Branch Prediction units, Saturating and Non-Saturating Counters,
                    Conditional and Non-Conditional Branch instructions, Branch Distances
                </p></td>
            </tr>
            <tr>
                <td><p>Robotic Marionette Puppet</p></td>
                <td><p>
                    Created a robotic marionette puppet capable of 18 degrees of accelerated freedom
                    using continuous rotation PWM servos in C++. <br />
                    Concepts Involved:  Forward and Inverse Kinematics, Complex and Multivariate Bayesian Networks, 
                    Real-Time Physics Simulation, Error Recovery, Fuzzy Logic in Genetic Algorithms.
                </p></td>
            </tr>
        </table>
        <table>
            <col width="20%" />
            <col width="80%" />
    
            <tr>
                <td colspan="2"><h2>EXPERIENCE</h2></td>
            </tr>
            <tr>
                <td><p>2014-2016</p></td>
                <td><h3>Digiwest llc. - Embedded Software Engineer</h3></td>
            </tr>
            <tr>
                <td></td>
                <td><p>
    	    Performed hardware integration of the ATWINC1500 WiFi chipset
    	    into an existing industrial grade embedded system with a 48MHz SPI host control bus.
    	    Created a graphical highway safety report generator (used by Idaho Department of 
    	    Transportation) using the ArcPy, XLRD, and TkInter libraries.  Created a script to 
    	    support directories in 6 outdated virutal conferencing systems, saving roughly $12,000.
                </p></td>
            </tr>
            <tr>
                <td><p>2012-2014</p></td>
                <td><h3>Elmer's Restaurants Inc. - IT Administrator</h3></td>
            </tr>
            <tr>
                <td></td>
                <td><p>
                Maintained 6 PCI-DSS compliant networks at corporate restaurant 
    	    locations.  Implemented an OpenVPN road-warrior network on a pfSense 
    	    firewall which authenticates user access via LDAP to a Windows Domain 
    	    Controller.  Provided IT support for a mixed Windows 2003/2008 
    	    domain with Active Directory Users and Groups Policies.  
                </p></td>
            </tr>
            <tr>
                <td><p>2010-2012</p></td>
                <td><h3>Portland State University - OIT</h3></td>
            </tr>
            <tr>
                <td></td>
                <td><p>
                Provided general user support at 5 computer labs around campus.
                </p></td>
            </tr>
            <tr>
                <td><p>2009-2010</p></td>
                <td><h3>Lewis County Courthouse - IT Support</h3></td>
            </tr>
            <tr>
                <td></td>
                <td><p>
    	    Imaged and deployed roughly 200 desktop workstations while providing IT
    	    support.  Wrote a network to USB thumb-drive backup utility for 911
    	    operators' stations using C#.
                </p></td>
            </tr>
        </table>
</div>
</body>
</html>
