<?php 
    define ("NORMALIZE", "<link href='../css/normalize.css' rel='stylesheet'>");
    define ("BOOTSTRAP", "<link href='../css/bootstrap.min.css' rel='stylesheet'>");
    define ("STYLE", "<link href='../css/style.css' rel='stylesheet'>");
    define ("TITLE", "Setup Web Server | David Mendez");
    include('includes/php/head.php');
    
?>

      <div class='container' id="wrapper">

        <h1 id="intro">Web Server Setup</h1>
        <h4>Jump To: <a href="#intro">Intro</a>, <a href="#ubuntu_server">Ubuntu Server</a>, <a href="#ssh">SSH</a>,
            <a href="#static_ip">Static IP Address</a>, <a href="#apache_server">Apache Web Server</a>
            ,  <a href="#port_forward">Port Forwarding</a></h4>
        <h2>Intro</h2>
	<p>Setting up my own web-server has taught me more about how the internet works, and has helped me feel 
        more capable of tackling more complex networking problems. This is how I set up 
        an Ubuntu Server OS, ssh, static ip, apache web server, and port forwarding.</p>
	<p>According to Wikipedia: a <a href="http://en.wikipedia.org/wiki/Web_server">web server</a> is an information technology that processes requests via HTTP, the basic network protocol used to distribute information on the World Wide Web. The term can refer either to the entire computer system, an appliance, or specifically to the software that accepts and supervises the HTTP requests.[1]</p>
	
	<h2>Things that you will need:</h2>
	
	<ol>
	<li>Old Computer</li>
	<li>Ubuntu Web Server 14.04</li>
	<li>Ethernet cables rj45</li>
	<li>Patience ;-)</li>
	</ol>
	
	<h2 id="ubuntu_server">Step 1: Create a bootable Ubuntu CD.</h2>
	<p>a) Download: <a href="http://www.ubuntu.com/download/server">Ubuntu Server</a></p>
	<p>Ubuntu is a Linux operating system that is developed by canonical.</p>
	<p>b) Burn the iso img file to a empty cd or dvd.</p>
  <p>Still stuck! Then:</p>
	<p>Search for creating a linux live cd in youtube for a video tutorial.</p>
	
  <h2>Step 2: Install Ubuntu Server 14.04 to your server computer.</h2>
	<p>Insert The Ubuntu cd you created earlier and install the Ubuntu operating system.</p>
  <p>Here is a overview on how to install Ubuntu Server: <a 
    href="http://www.ubuntu.com/download/server/install-ubuntu-server">
    Installing Ubuntu for General Use</a> instructions.
	</p>
  
  <p>
	<!--Here is a detailed guide: <a 
  href="http://www.servermom.org/basic-ubuntu-setup-before-building-a-working-server/85/"
  >http://www.servermom.org/basic-ubuntu-setup-before-building-a-working-server/85/</a>
  -->
  </p>

	<h2 id="ssh">Step 3: Install "Open SSH Server" to your server.</h2>
	<p>Downloading openssh-server will allow you to remotely control your server
	by connecting to it via ssh. For example, I connect to my home server by typing its
	ip address in a terminal(linux or mac) or using putty(windows). More on this in step 4.</p>
	<p>a) Run the command below to install openssh-server:</p>
	<pre>
	<code class="code-box">sudo apt-get install openssh-server</code>
	</pre>
	<p>b) You can make aditional changes by editing the ssh config file:</p>
	<pre>
	<code class="code-box">sudo nano /etc/ssh/sshd_config</code>
	</pre>
	<p>c) Restart openssh-server:</p>
	<pre>
	<code class="code-box">sudo /etc/init.d/ssh restart</code>
	</pre>
	<p>All done!</p>
	
	<h2>Step 4: Remotely connect to your server from another computer, via terminal(linux or mac) 
	 or <a href="http://putty.org">putty</a>(windows).</h2>
	<p>Linux computers and mac's have built in tools to connect via ssh. if you are using
	 a microsoft windows machine download putty. To download putty search for it 
	on google.com</p>
	<p>a) Start by typing ifconfig on your server and look for your server's ip address.</p>
	<pre>
        <code class="code-box">ifconfig</code>
	</pre>
	<p>Results ...</p>
	<pre>
<code class="code-box">
 eth0      Link encap:Ethernet  HWaddr 00:0F:20:CF:8B:42
#ip addr-> inet addr:217.149.127.10  Bcast:217.149.127.63  Mask:255.255.255.192 
           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
           RX packets:2472694671 errors:1 dropped:0 overruns:0 frame:0
           TX packets:44641779 errors:0 dropped:0 overruns:0 carrier:0
           collisions:0 txqueuelen:1000
           RX bytes:1761467179 (1679.7 Mb)  TX bytes:2870928587 (2737.9 Mb)
           Interrupt:28
</code>
	</pre>
	<p>b) Go to your client computer and launch a terminal window or putty(windows).</p>
	<p>c) Type in the username and ip adress of your server in a terminal window:</p>
	<pre>
	<code class="code-box">ssh john@217.149.127.10 -p 22</code>
	</pre>
	<p>All done! You should be able to connect to your server via ssh.</p>
	<p>Note! Connecting with putty is easy. ip address enter 192.168.1.15. Port number is 22(depending if you edited the sshd_config file.)</p>
	
	<h2 id="static_ip">Step 5: Set a static ip for your server.</h2>
	<p>According to Wikipedia: <a href="http://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol">
	The Dynamic Host Configuration Protocol (DHCP)</a> is a standardized network protocol
	used on Internet Protocol (IP) networks for dynamically distributing network configuration
	parameters, such as IP addresses for interfaces and services. With DHCP, computers request
	IP addresses and networking parameters automatically from a DHCP server,
	reducing the need for a network administrator or a user to configure
	these settings manually.</p>
	<p>Lets set the ip address of your server to a static ip address.</p>
	<p>a) Connect to your server from another computer via ssh. </p>
	<p>b) Run the command bellow to view the interfaces file.</p>
	<pre>
	<code class="code-box">sudo nano /etc/network/interfaces</code>
	</pre>
	<p>c) find this:</p>
	<pre>
	<code class="code-box">iface eth0 inet dhcp</code>
	</pre>
	<p>d) change it to this:</p>
	<pre>
<code class="code-box">
auto eth0
iface eth0 inet static
	address 10.253.0.50   # Choose your static ip address. 
	netmask 255.255.255.0 # This is usually the same everywhere.
	network 10.253.0.0	  # Also your router's ip address.
	gateway 10.253.0.1    # This is your router's ip address.
	dns-nameservers 8.8.8.8
</code>
	</pre>
	<p></p>
	<p>Save your changes using ctrl + o</p>
	<p>e) Restart the network:</p>
	<pre>
	<code class="code-box">sudo ifdown eth0 && sudo ifup eth0</code>
	</pre>
	<p> All done!</p>
	
	<h2 id="apache_server">Step 6: Install apache web server.</h2>
	<p>Apache is a really common web server. More on this on: <a href="https://help.ubuntu.com/lts/serverguide/httpd.html">HTTPD - Apache 2 Web Server</a></p>
	<p>a) Install apache 2 web server:</p>
	<pre>
	<code class="code-box">sudo apt-get install apache2</code>
	</pre>
	<p>b) Test the installation by typing in your server's ip address in a web browser.</p>
	<p> It works! All done! More on this on: <a href="https://help.ubuntu.com/lts/serverguide/httpd.html">HTTPD - Apache 2 Web Server</a></p>
	
	<h2 id="port_forward">Step 7: Enable port forwarding in your router.</h2>
	<p>According to Wikipedia: In computer networking, <a href="http://en.wikipedia.org/wiki/Port_forwarding">port forwarding</a> or port mapping is an application of network address
	translation (NAT) that redirects a communication request from one address and port number combination
	to another while the packets are traversing a network gateway, such as a router or firewall. </p>
	<p>a) Find your router's ip address/ default Gateway.</p>
	<pre>
	<code class="code-box">netstat -rn</code>
	</pre>
	<p>Results ...</p>
	<pre>
	<code class="code-box">
Kernel IP routing table
Destination     Gateway         Genmask         Flags   MSS Window  irtt Iface
0.0.0.0  Here-> 10.253.0.1     0.0.0.0         UG        0 0          0 eth0
10.1.10.0       0.0.0.0         255.255.255.0   U         0 0          0 eth2
10.253.0.0      0.0.0.0         255.255.255.0   U         0 0          0 eth1
	</code>
	</pre>
	<p>b) Type in your router's ip address in any browser in your local network and enter your username and password.
	If you have not setup your username and password, look up your router's default username and password or call
	your internet service provider for help.</p>
	<p>c) enable port forwarding Search for enabling port forwarding in a search engine depending on your router's make and
	model</p>
	<p>Step 7 is more involved because you have to learn how to setup port-forwarding on your particular router.</p>
        <h4>Jump To: <a href="#intro">Intro</a>, <a href="#ubuntu_server">Ubuntu Server</a>, <a href="#ssh">SSH</a>,
            <a href="#static_ip">Static IP Address</a>, <a href="#apache_server">Apache Web Server</a>
            ,  <a href="#port_forward">Port Forwarding</a></h4>
</div>

	
	
<!-- END content -->
      </div>
      


<?php include('includes/php/footer.php'); ?>