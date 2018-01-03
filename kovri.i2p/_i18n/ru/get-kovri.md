<div class="text-center container description">
    <p>A quickstart guide for getting Kovri up and running. For further information on any topic, please see the <a href="docs.html">documentation.</a></p>
</div>
<div class="using">
    <section class="container">
        <div class="row">      
            <!-- full block-->
            <div class="full col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="info-block text-adapt">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>1. Support</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p>First off, if you run into trouble on any of these steps, it's useful to know where you can find help. Please go to our <a href="irc://chat.freenode.net/#kovri">#kovri</a> IRC channel for general Kovri inquiries and our <a href="irc://chat.freenode.net/#kovri-dev">#kovri-dev</a> channel for questions that are development related. Ask your question and be patient as you wait for an answer.</p>
                    </div>
                </div>
            </div>
            <!-- end full block -->
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="left half no-pad-sm col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="info-block">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>2. Download Kovri</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p><a href="https://github.com/monero-project/kovri#nightly-releases-bleeding-edge">Download one of the binaries</a> or build from source (see the <a href="docs.html">Building section </a>in the documentation for details).</p>
                    </div>
                </div>
            </div>
            <div class="right half col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="info-block">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>3. Open NAT/Firewall</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p>Kovri should randomly generate a new port to use on startup, but if you want to choose your own, you can go to kovri.conf and set any port between 9111 and 30777. See the <a href="docs.html">User Guide</a> in the documentation for more details.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">   
            <!-- full block-->
            <div class="full col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="info-block text-adapt">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>Stop! Let's talk about Operational Security (Opsec)</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p>Kovri can help keep you anonymous to a point, but it can't defend against user error. For this reason, we recommend a few opsec-related housekeeping things.</p>
                        <p>
                            <ol>
                                <li>Make a designated user for running Kovri, and ONLY run Kovri using that user.</li>
                                <li>We recommend using Linux, and a even then consider using a hardened kernel (such as <a href="https://en.wikibooks.org/wiki/Grsecurity">grsec</a> with RBAC)</li>
                                <li>After installing the appropriate resources in your kovri data path, consider setting appropriate access control with <a href="https://linux.die.net/man/1/setfacl">setfacl</a>, <a href="https://en.wikipedia.org/wiki/Umask">umask</a>, or whatever your OS uses for ACL.<br><em>Note: see kovri.conf to find your data path for Linux/OSX/Windows</em></li>
                                <li><strong>Never share your port number with anyone as it will effect your anonymity!</strong></li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end full block -->
        </div>
    </section>
        <section class="container">
        <div class="row">
            <div class="left half no-pad-sm col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="info-block">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>5. Set up Tunnels</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p>There's two types of tunnels, client and server. Client tunnels are used to connect to other services and server tunnels are used if you want to host your own services (so other people can connect to them). By default, Kovri has IRC (Irc2P) and email (i2pmail) client tunnels set up. You can add or remove tunnels of any kind in kovri.conf. If you want to host your own service, it's recommended to read steps 4 and 5 in the <a href="docs.html">User Guide</a>. If not, you can skip them.</p>
                    </div>
                </div>
            </div>
            <div class="right half col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="info-block">
                    <div class="row center-xs">
                        <div class="col">
                            <h2>6. Run Kovri</h2>
                        </div>
                    </div>
                    <div class="row start-xs">
                        <p>Here you are. You're almost done. Now the only thing left to do is to run <code>cd build/ && ./kovri</code> in your terminal. Once connected, it should take about 5 minutes to bootstrap into the network and start using services, so be patient. Remember to <a href="https://github.com/monero-project/kovri/issues">report any bugs</a> if you run into any trouble. See? That wasn't so hard, was it? Have fun!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
