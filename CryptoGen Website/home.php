<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CryptoGen - Information About Cryptocurrencies</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
        CryptoGen
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link active" data-nav-link>Homepage</a>
          </li>

          <li class="navbar-item">
            <a href="#marketpart" class="navbar-link" data-nav-link>Market Updates</a>
          </li>

          <li class="navbar-item">
            <a href="#aboutus" class="navbar-link" data-nav-link>About Us</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <a href="index.php" class="btn btn-outline">Logout</a>

    </div>
  </header>





  <main>
    <article>

     

<!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/dd.webp" width="748" height="436" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title">What is Cryptocurrency?</h2><br>

            <p class="section-text">
              Cryptocurrency is a digital payment system that doesn't rely on banks to verify transactions. It’s a peer-to-peer system that can enable anyone anywhere to send and receive payments. Instead of being physical money carried around and exchanged in the real world, cryptocurrency payments exist purely as digital entries to an online database describing specific transactions. When you transfer cryptocurrency funds, the transactions are recorded in a public ledger. Cryptocurrency is stored in digital wallets.
            </p>
            <p class="section-text">
              Cryptocurrency received its name because it uses encryption to verify transactions. This means advanced coding is involved in storing and transmitting cryptocurrency data between wallets and to public ledgers. The aim of encryption is to provide security and safety.
            </p>

            <p class="section-text">
              The first cryptocurrency was Bitcoin, which was founded in 2009 and remains the best known today. Much of the interest in cryptocurrencies is to trade for profit, with speculators at times driving prices skyward.
            </p>

          </div>
        </div>
        
      </section>











      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h2 class="h2 section-title">How does cryptocurrency work?</h2><br>

            <p class="hero-text">
              Cryptocurrencies run on a distributed public ledger called blockchain, a record of all transactions updated and held by currency holders.
            </p>
            <p class="hero-text">
              Units of cryptocurrency are created through a process called mining, which involves using computer power to solve complicated mathematical problems that generate coins. Users can also buy the currencies from brokers, then store and spend them using cryptographic wallets.
            </p>
            <p class="hero-text">
              If you own cryptocurrency, you don’t own anything tangible. What you own is a key that allows you to move a record or a unit of measure from one person to another without a trusted third party.
            </p>
            <p class="hero-text">
              Although Bitcoin has been around since 2009, cryptocurrencies and applications of blockchain technology are still emerging in financial terms, and more uses are expected in the future. Transactions including bonds, stocks, and other financial assets could eventually be traded using the technology.
            </p>
          
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/bb.jpg" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>








      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/222.webp" width="648" height="336" loading="lazy" alt="about banner"
              class="w-150">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title">Cryptocurrency Examples</h2><br>

            <p class="section-text">
              There are thousands of cryptocurrencies. Some of the best known include:
            </p>

            <h4 class="h4 card-title"> Bitcoin&nbsp;:</h4>
            <p class="section-text">
              Founded in 2009, Bitcoin was the first cryptocurrency and is still the most commonly traded. The currency was developed by Satoshi Nakamoto – widely believed to be a pseudonym for an individual or group of people whose precise identity remains unknown.
            </p>

            <h4 class="h4 card-title"> Ethereum&nbsp;:</h4>
            <p class="section-text">
              Developed in 2015, Ethereum is a blockchain platform with its own cryptocurrency, called Ether (ETH) or Ethereum. It is the most popular cryptocurrency after Bitcoin.
            </p>

            <h4 class="h4 card-title"> Litecoin&nbsp;:</h4>
            <p class="section-text">
              This currency is most similar to bitcoin but has moved more quickly to develop new innovations, including faster payments and processes to allow more transactions.
            </p>

            <h4 class="h4 card-title"> Ripple&nbsp;:</h4>
            <p class="section-text">
              Ripple is a distributed ledger system that was founded in 2012. Ripple can be used to track different kinds of transactions, not just cryptocurrency. The company behind it has worked with various banks and financial institutions.
            </p>

          </div>
        </div>
        
      </section>

      


      <!-- 
        - #MARKET
      -->
      <a name="marketpart"></a>
      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">

            
            <h2 class="h2 section-title">Market Update</h2><br>

            <a href="#marketpart" class="btn-link">See All Coins</a>
          </div>

          <div class="market-tab">

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">View All</button>
              </li>

              <li>
                <button class="tab-btn">Metaverse</button>
              </li>

              <li>
                <button class="tab-btn">Entertainment</button>
              </li>

              <li>
                <button class="tab-btn">Energy</button>
              </li>

              <li>
                <button class="tab-btn">NFT</button>
              </li>

              <li>
                <button class="tab-btn">Gaming</button>
              </li>

              <li>
                <button class="tab-btn">Music</button>
              </li>

            </ul>

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">Name</th>

                  <th class="table-heading" scope="col">Last Price</th>

                  <th class="table-heading" scope="col">24h %</th>

                  <th class="table-heading" scope="col">Market Cap</th>

                  <th class="table-heading" scope="col">Last 7 Days</th>

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">1</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$21,886.54</td>

                  <td class="table-data last-update green">+1.63%</td>

                  <td class="table-data market-cap">$418.16B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">2</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$1,739.54</td>

                  <td class="table-data last-update red">-1.16%</td>

                  <td class="table-data market-cap">$212.51B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">3</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$1.00</td>

                  <td class="table-data last-update green">+0.02%</td>

                  <td class="table-data market-cap">$67.74B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$294.94</td>

                  <td class="table-data last-update green">+0.25%</td>

                  <td class="table-data market-cap">$47.43B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$35.22</td>

                  <td class="table-data last-update green">+1.88%</td>

                  <td class="table-data market-cap">$12.33B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">6</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$0.3521</td>

                  <td class="table-data last-update red">-1.06%</td>

                  <td class="table-data market-cap">$17.57B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">7</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$0.5081</td>

                  <td class="table-data last-update red">-0.31%</td>

                  <td class="table-data market-cap">$17.32B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">8</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$20.61</td>

                  <td class="table-data last-update green">+1.32%</td>

                  <td class="table-data market-cap">$6.05B</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">...</button>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </section>



      <!-- 
        - #INSTRUCTION
      -->

      <section class="section instruction" aria-label="instruction" data-section>
        <div class="container">

          <h2 class="h2 section-title">How to buy cryptocurrency</h2><br>

          <p class="section-text">
            You may be wondering how to buy cryptocurrency safely. There are typically three steps involved. These are:
          </p>

          <ul class="instruction-list">

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-1.png" width="96" height="96" loading="lazy" alt="Step 1"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 1</p>

                <h3 class="h3 card-title"> Choosing a platform</h3>

                <p class="card-text">
                  The first step is deciding which platform to use. Generally, you can choose between a traditional broker or dedicated cryptocurrency exchange.When comparing different platforms, consider which cryptocurrencies are on offer, what fees they charge, their security features, storage and withdrawal options, and any educational resources.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-2.png" width="96" height="96" loading="lazy" alt="Step 2"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 2</p>

                <h3 class="h3 card-title">Funding your account</h3>

                <p class="card-text">
                  Once you have chosen your platform, the next step is to fund your account so you can begin trading. Most crypto exchanges allow users to purchase crypto using fiat (i.e., government-issued) currencies such as the US Dollar, the British Pound, or the Euro using their debit or credit cards – although this varies by platform.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-3.png" width="96" height="96" loading="lazy" alt="Step 3"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 3</p>

                <h3 class="h3 card-title"> Placing an order</h3>

                <p class="card-text">
                  You can place an order via your broker's or exchange's web or mobile platform. If you are planning to buy cryptocurrencies, you can do so by selecting "buy," choosing the order type, entering the amount of cryptocurrencies you want to purchase, and confirming the order. The same process applies to "sell" orders.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-4.png" width="96" height="96" loading="lazy" alt="Step 4"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 4</p>

                <h3 class="h3 card-title">Earn Money</h3>

                <p class="card-text">
                  You can make Money either by selling or purchasing the Cryptocurrency.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>







      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h2 class="h2 section-title">How to store cryptocurrency</h2><br>

            <p class="hero-text">
              Once you have purchased cryptocurrency, you need to store it safely to protect it from hacks or theft. Usually, cryptocurrency is stored in crypto wallets, which are physical devices or online software used to store the private keys to your cryptocurrencies securely. Some exchanges provide wallet services, making it easy for you to store directly through the platform. However, not all exchanges or brokers automatically provide wallet services for you.
            </p>
            <p class="hero-text">
              There are different wallet providers to choose from. The terms “hot wallet” and “cold wallet” are used :
            </p>

            <h4 class="h4 card-title"> Hot wallet storage&nbsp;:</h4>
            <p class="hero-text">
              "hot wallets" refer to crypto storage that uses online software to protect the private keys to your assets.
            </p>

            <h4 class="h4 card-title"> Cold wallet storage&nbsp;:</h4>
            <p class="hero-text">
              "Unlike hot wallets, cold wallets (also known as hardware wallets) rely on offline electronic devices to securely store your private keys.
            </p>

            <p class="hero-text">
              Typically, cold wallets tend to charge fees, while hot wallets don't.
            </p>
           
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/1111.jpg" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>








      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/b.jpg" width="648" height="336" loading="lazy" alt="about banner"
              class="w-150">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title">What can you buy with cryptocurrency?</h2><br>

            <p class="section-text">
              When it was first launched, Bitcoin was intended to be a medium for daily transactions, making it possible to buy everything from a cup of coffee to a computer or even big-ticket items like real estate. That hasn’t quite materialized and, while the number of institutions accepting cryptocurrencies is growing, large transactions involving it are rare. Even so, it is possible to buy a wide variety of products from e-commerce websites using crypto. Here are some examples:
          </p>

            </p>

            <h4 class="h4 card-title"> Technology and e-commerce sites&nbsp;:</h4>
            <p class="section-text">
              Several companies that sell tech products accept crypto on their websites, such as newegg.com, AT&T, and Microsoft. Overstock, an e-commerce platform, was among the first sites to accept Bitcoin. Shopify, Rakuten, and Home Depot also accept it.
            </p>

            <h4 class="h4 card-title"> Luxury goods&nbsp;:</h4>
            <p class="section-text">
              Some luxury retailers accept crypto as a form of payment. For example, online luxury retailer Bitdials offers Rolex, Patek Philippe, and other high-end watches in return for Bitcoin.
            </p>

            <h4 class="h4 card-title">Cars&nbsp;:</h4>
            <p class="section-text">
              Some car dealers – from mass-market brands to high-end luxury dealers – already accept cryptocurrency as payment.
            </p>

            <h4 class="h4 card-title">Insurance&nbsp;:</h4>
            <p class="section-text">
              In April 2021, Swiss insurer AXA announced that it had begun accepting Bitcoin as a mode of payment for all its lines of insurance except life insurance (due to regulatory issues). Premier Shield Insurance, which sells home and auto insurance policies in the US, also accepts Bitcoin for premium payments.
            </p>

            <p class="section-text">
              If you want to spend cryptocurrency at a retailer that doesn’t accept it directly, you can use a cryptocurrency debit card, such as BitPay in the US.
            </p>

          </div>
        </div>
        
      </section>
      

      <section class="section instruction" aria-label="instruction" data-section>
        <div class="container">

          <h2 class="h2 section-title">Cryptocurrency fraud and cryptocurrency scams</h2><br>
          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unfortunately, cryptocurrency crime is on the rise. Cryptocurrency scams include:
          </p>

          <h4 class="h4 card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fake websites&nbsp;:</h4>
          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bogus sites which feature fake testimonials and crypto jargon promising massive, guaranteed returns, provided you keep investing.
          </p>

          <h4 class="h4 card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Virtual Ponzi schemes&nbsp;:</h4>
          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cryptocurrency criminals promote non-existent opportunities to invest in digital currencies and create the illusion of huge returns by paying off old investors with new investors’ money. One scam operation, BitClub Network, raised more than $700 million before its perpetrators were indicted in December 2019.
          </p>

          <h4 class="h4 card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Celebrity" endorsements&nbsp;:</h4>
          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scammers pose online as billionaires or well-known names who promise to multiply your investment in a virtual currency but instead steal what you send. They may also use messaging apps or chat rooms to start rumours that a famous businessperson is backing a specific cryptocurrency. Once they have encouraged investors to buy and driven up the price, the scammers sell their stake, and the currency reduces in value.
          </p>

          <h4 class="h4 card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romance scams&nbsp;:</h4>
          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The FBI warns of a trend in online dating scams, where tricksters persuade people they meet on dating apps or social media to invest or trade in virtual currencies. The FBI’s Internet Crime Complaint Centre fielded more than 1,800 reports of crypto-focused romance scams in the first seven months of 2021, with losses reaching $133 million.
          </p>

          <p class="abc">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Otherwise, fraudsters may pose as legitimate virtual currency traders or set up bogus exchanges to trick people into giving them money. Another crypto scam involves fraudulent sales pitches for individual retirement accounts in cryptocurrencies. Then there is straightforward cryptocurrency hacking, where criminals break into the digital wallets where people store their virtual currency to steal it.
          </p>
        </div>
      </section>


      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h2 class="h2 section-title">Is Cryptocurrency Safe?</h2><br>

            <p class="hero-text">
              Cryptocurrencies are usually built using blockchain technology. Blockchain describes the way transactions are recorded into "blocks" and time stamped. It's a fairly complex, technical process, but the result is a digital ledger of cryptocurrency transactions that's hard for hackers to tamper with.
            </p>
            <p class="hero-text">
              In addition, transactions require a two-factor authentication process. For instance, you might be asked to enter a username and password to start a transaction. Then, you might have to enter an authentication code sent via text to your personal cell phone.
            </p>
            <p class="hero-text">
              While securities are in place, that does not mean cryptocurrencies are un-hackable. Several high-dollar hacks have cost cryptocurrency start-ups heavily. Hackers hit Coincheck to the tune of $534 million and BitGrail for $195 million, making them two of the biggest cryptocurrency hacks of 2018.
            </p>
            <p class="hero-text">
              Unlike government-backed money, the value of virtual currencies is driven entirely by supply and demand. This can create wild swings that produce significant gains for investors or big losses. And cryptocurrency investments are subject to far less regulatory protection than traditional financial products like stocks, bonds, and mutual funds.
            </p>

            
           
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/6666.jpg" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>



      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h2 class="h2 section-title">Four tips to invest in cryptocurrency safely</h2><br>

            <p class="hero-text">
              According to Consumer Reports, all investments carry risk, but some experts consider cryptocurrency to be one of the riskier investment choices out there. If you are planning to invest in cryptocurrencies, these tips can help you make educated choices.
            </p>
           
            <h4 class="h4 card-title">Research exchanges&nbsp;:</h4>
            <p class="section-text">
              Before you invest, learn about cryptocurrency exchanges. It’s estimated that there are over 500 exchanges to choose from. Do your research, read reviews, and talk with more experienced investors before moving forward.
            </p>

            <h4 class="h4 card-title">Know how to store your digital currency&nbsp;:</h4>
            <p class="section-text">
              If you buy cryptocurrency, you have to store it. You can keep it on an exchange or in a digital wallet. While there are different kinds of wallets, each has its benefits, technical requirements, and security. As with exchanges, you should investigate your storage choices before investing.
            </p>

            <h4 class="h4 card-title">Diversify your investments&nbsp;:</h4>
            <p class="section-text">
              Diversification is key to any good investment strategy, and this holds true when you are investing in cryptocurrency. Don't put all your money in Bitcoin, for example, just because that's the name you know. There are thousands of options, and it's better to spread your investment across several currencies.
            </p>

            <h4 class="h4 card-title">Prepare for volatility&nbsp;:</h4>
            <p class="section-text">
              The cryptocurrency market is highly volatile, so be prepared for ups and downs. You will see dramatic swings in prices. If your investment portfolio or mental wellbeing can't handle that, cryptocurrency might not be a wise choice for you.
            </p>

            <p class="hero-text">
              Cryptocurrency is all the rage right now, but remember, it is still in its relative infancy and is considered highly speculative. Investing in something new comes with challenges, so be prepared. If you plan to participate, do your research, and invest conservatively to start.
            </p>
           
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/l.jpg" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>












  <!-- 
    - #FOOTER
  -->
  <a name="aboutus"></a>
  <footer class="footer">

    <div class="footer-top" data-section>
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="50" height="50" alt="Cryptex logo">
            CryptoGen
          </a>

          <h2 class="footer-title">Let's talk! 🤙</h2><br>

          <a  href="tel:+123456789101" class="footer-contact-link">123-456-789 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</a>

          <a href="email:teamL@gmail.com" class="footer-contact-link">teaml@gmail.com&nbsp;&nbsp;&nbsp;</a>

          <address class="footer-contact-link">
            Banglore 560032&nbsp;&nbsp;&nbsp;
          </address>

        </div>

       



        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliates</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Press</a>
          </li>

          <li>
            <a href="#" class="footer-link">Cookie policy</a>
          </li>

        </ul>

        

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help center</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Status</a>
          </li>

          <li>
            <a href="#" class="footer-link">Account information</a>
          </li>

          <li>
            <a href="#" class="footer-link">Account access</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Stay Updated</p>
          </li>

          <li>
            <a href="#" class="footer-link">Events</a>
          </li>

          <li>
            <a href="#" class="footer-link">Newsletters</a>
          </li>

          <li>
            <a href="#" class="footer-link">Follow</a>
          </li>

        </ul>

       

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 Cryptex All Rights Reserved by <a href="#" class="copyright-link">teamL</a>
        </p>

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://twitter.com/i/flow/login" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://in.linkedin.com/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>