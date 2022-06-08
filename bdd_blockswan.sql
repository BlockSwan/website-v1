-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 22 jan. 2022 à 16:48
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_blockswan`
--

-- --------------------------------------------------------

--
-- Structure de la table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `ticker` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` double DEFAULT '0',
  `share` double NOT NULL,
  `icon` varchar(20) NOT NULL,
  `value` double DEFAULT '0',
  `exchange` varchar(10) DEFAULT NULL,
  `description` text,
  `website` varchar(250) DEFAULT NULL,
  `sourceCode` varchar(250) DEFAULT NULL,
  `whitepaper` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `asset`
--

INSERT INTO `asset` (`id`, `ticker`, `price`, `name`, `amount`, `share`, `icon`, `value`, `exchange`, `description`, `website`, `sourceCode`, `whitepaper`) VALUES
(1, 'BTC', 0, 'Bitcoin', 0, 0, 'btc.png', 0, 'KUCOIN', 'Bitcoin is the oldest and most famous <b>cryptocurrency</b> in the world. It is also the first cryptocurrency in terms of <b>market capitalisation</b>.  <br><br>\n\nBitcoin was created in January 2009 by someone known as <b>Satoshi Nakamoto</b>, which is only a pseudonym. In fact, we do not know the real identity behind this mysterious name. The anonymity of Bitcoin’s creator is one of the greatest mysteries about <b>cryptocurrency</b>. In fact, some people argue that Satoshi Nakamoto is more likely to be a group of people rather than 1 single person. <br><br>\n\nThe idea of Bitcoin was to offer lower transaction fees than traditional online payment mechanisms and mostly to be <b>decentralised</b>. <br><br>\n\nWhich means that there are no governments or banks issuing the currencies and controlling it. Since it is digital, there are no physical bitcoins. Every balance is kept on a public ledger that everyone has transparent access to. All bitcoin transactions are verified by a massive amount of computing power called the <b>blockchain</b>, and it is that system which allows it to be <b>decentralised</b> and very secure. However, computing powers require a lot of electric energy, hence people are incentivised to give this energy in exchange of <b>Bitcoin rewards</b>. <b>Mining</b> a the process where blocks are added to a blockchain, verifying transactions. It is also the process through which new bitcoin are created. <b>Miners</b> are important to the network because they provide the necessary energy to run the network, and hence they are rewarded for that. <br><br>\n\nAnother important point about Bitcoin, and one of the reasons people see value in it, is the fact that Bitcoin supply is limited. The maximum supply is 21 million, so there will never be more than 21 million Bitcoin in existence, and the Blockchain technology enables that and give trust to people. Bitcoin was designed to be deflationary, which means that the value of 1 Bitcoin should increase naturally overtime. The was it works is through halving. Bitcoin halving is exactly what is sounds like, and it is when the rewards that Bitcoin miners receive for supporting the blockchain are cut exactly in half. This process happens every 4 year approximately and the last time was on May 11, 2020. <br><br>\n\n<b>Bitcoin Halving :</b><br><br>\n\nA Bitcoin halving is exactly what it sounds like — it’s when the rewards that Bitcoin miners receive for supporting the Bitcoin blockchain are cut exactly in half.<br><br>\n\nMiners support the Bitcoin blockchain by using computing power to confirm Bitcoin transactions and thus add new blocks to the blockchain. They are rewarded for their work with Bitcoin block rewards, which is how new Bitcoin is created.<br><br>\n\nWhile it might seem illogical that cryptocurrency miners would continue to accept these mining reward “salary” decreases, so to say, there actually is a very important reason why halvings are built into the Bitcoin system.<br><br>\n\nWhen Satoshi Nakamoto Bitcoin’s pseudonymous founder, created Bitcoin back in 2008, he/she/they decided that Bitcoin would have a hard limit of 21 million. It was important that coins were released gradually into the market, but it was just as important that they would also have a predictable decaying rate. With this goal in mind, Satoshi created the terms that meant that every 210,000 blocks, the rewards that miners receive are halved. There will only even be 32 halvings and once the 32nd halving takes place, the maximum supply of Bitcoin (21 million) will have been reached. In the beginning, these digital currency miners received a block reward of 50 BTC per block. As of November 2020, there have been three halving events, and the block reward stands at 6.25 BTC per block.', 'https://bitcointalk.org/index.php', 'https://github.com/bitcoin/bitcoin', 'https://bitcoin.org/bitcoin.pdf'),
(2, 'UOS', 1.3, 'Ultra', 1443, 25.099584211886178, 'uos.png', 1875.9, 'KUCOIN', NULL, 'https://ultra.io/', 'https://github.com/ultraio', 'https://api.website.ultra.io/uploads/225c4c5ae4fc4d41b418a538df00ad3e.pdf'),
(3, 'PKN', 0.04227873183707263, 'Pokmi', 1500, 0.848535575017078, 'pkn.png', 63.41809775560895, NULL, NULL, 'https://www.pokmi.com/', 'https://github.com/Edoumou/rareporn-application', 'https://global-uploads.webflow.com/612d3e6930fdc54f36f7d349/6156e43e02db41c6ccd2afc4_WhitePaperPokmi.pdf'),
(4, 'AUDIO', 1.47, 'Audius', 1050, 20.652064732153267, 'audio.png', 1543.5, 'BINANCE', NULL, 'https://audius.co/', 'https://github.com/AudiusProject', 'https://whitepaper.audius.co/AudiusWhitepaper.pdf'),
(5, 'AURY', 13.05, 'Aurory', 5, 0.8730464682688699, 'aury.png', 65.25, 'HUOBI', NULL, 'https://aurory.io/', NULL, 'https://aurory.io/litepaper'),
(6, 'EGLD', 200.3345723966173, 'Elrond', 20, 53.60962173272673, 'egld.png', 4006.691447932346, NULL, 'Elrond is a blockchain designed for immense scalability and significant transaction throughput thanks to its adaptive state sharding system, which enables transactions to be handled rapidly by multiple validators. Whereas Bitcoin can handle just a maximum of seven transactions per second, Elrond claims to be able to push through 15 000 transactions per second as of now at just $0.001 each, with instant finality. It also promises the ability to scale into the hundreds of thousands of transactions per second as demand grows. <br> <br>\n\nGiven that kind of speed and scalability, Elrond has positioned itself as an ideal blockchain for decentralized finance (DeFi) developers to use for their apps, as well as for other kinds of decentralized apps (dapps). Elrond uses the eGold (EGLD) token throughout the network; before the July 2020 mainnet launch brought EGLD to life, Elrond used the now-defunct ERD token. Elrond allowed users to swap 1000 ERD for 1 EGLD after the mainnet went live.', 'https://elrond.com/', 'https://github.com/ElrondNetwork', 'https://elrond.com/assets/files/elrond-whitepaper.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `ibswn`
--

CREATE TABLE `ibswn` (
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `term`
--

CREATE TABLE `term` (
  `id_term` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `term`
--

INSERT INTO `term` (`id_term`, `name`, `description`) VALUES
(1, 'Altcoin', 'Altcoins are the other cryptocurrencies launched after the success of Bitcoin. Generally, they sell themselves as better alternatives to Bitcoin. The term “altcoins” refers to all cryptocurrencies other than Bitcoin. As of early 2020, there were more than 5 000 cryptocurrencies by some estimates, According to CoinMarketCap, altcoins accounted for over 34% of the total cryptocurrency market in February 2020.'),
(2, 'ATH', 'ATH is an acronym for All Time High. It is the maximum price attained by a cryptocurrency after it has been listed on exchanges. If the price of a coin surpasses its previous ATH, the values is revised, and a new ATH is established.'),
(3, 'Atomic Swap', 'Atomic swap is the name given to the technology which allows 2 parties to exchange cryptocurrencies directly from their wallets. This transactions is therefore performed without the need for a third party or intermediate. Atomic swapping is specially designed to facilitate the exchange of 2 different types of cryptocurrencies (e.g. Bitcoin to Litecoin), even if they are running on different blockchains.'),
(4, 'Bitcoin ATM', 'A Bitcoin ATM is a machine that you can use to buy or sell Bitcoin and other cryptocurrencies. They are placed in strategic locations where members of the public can easily access them. These machines are often owned by small businesses, such as bars or coffee shops, In some cases, however, they may be run by a Bitcoin ATM company that owns several units in different towns and cities.'),
(5, 'Halving', 'Bitcoin halving event is when the reward for mining Bitcoin transactions is cut in half. Halvings are occurring every 210 000 blocks or approximately every 4 years. This event also cuts in half Bitcoin’s inflation rate and the rate at which new Bitcoins enter circulation. Both previous halvings have correlated with intense boom and bust cycles that have ended with higher prices than prior to the event. Bitcoin last halved on May 2020, around 3 pm EST, resulting in a block reward of 6.25 BTC.'),
(6, 'Mining', 'The purpose of mining is to legitimize and monitor transactions and ensuring their validity. By mining, you can earn cryptocurrency without having to put down money for it. Bitcoin miners receive Bitcoin as a reward for completing “blocks” of verified transactions which are added to the Blockchain. You need either a GPU (graphic processing unit) or an application-specific integrated circuit (ASIC) in order to set up a mining rig. Other cryptocurrencies can also be mined. This process is called “crypto mining”.'),
(7, 'Block Reward', 'A block reward refers to the number of bitcoins you get if you successfully mine a block of the currency. Once a new block is mined, it is added to the blockchain and contributes to the safety and well functioning of the protocol. Regarding Bitcoin, the amount of the reward halves every 210 000 blocks or roughly every 4 years. The amount is expected to hit zero around 2140.'),
(8, 'BlockChain', 'A blockchain is a growing list of records, called blocks, that are linked using cryptography. Each block contains a cryptographic hash of previous block, a timestamp, and transaction data. By design, a blockchain is resistant to any modification of this data. This is because once recorded, the data in any given block cannot be altered retroactively without alteration of all subsequent blocks. For use as a distributed ledger, a blockchain is typically managed by a peer-to-peer network collectively adhering to a protocol for inter-node communication and validating new blocks.'),
(9, 'Bot', 'A BOT is an automated software application designed to perform repetitive tasks. Their primary purpose is to increase productivity by performing tasks that are deemed to be too time-consuming, complicated, or unfeasible for a human to perform. While bots can be used for good, they can also be used for malicious purposes such as viruses and malware.'),
(10, 'Bearish', 'Bearish is a term used to describe a type of market sentiment characterized by decreasing cryptocurrency prices. Someone that is bearish believes that the value of a particular cryptocurrency, or even the market will decline in price.'),
(11, 'Bullish', 'Bullish is a type of sentiment characterized by rising cryptocurrency prices. Someone who is bullish believes that the value of a particular cryptocurrency, or even the market will increase in price.'),
(12, 'Circulating Supply', 'The circulating supply of a given cryptocurrency is the number of coins currently in the market and in the hands of the general public. It is generally used as a metric calculating the market capitalization of coins Circulating supplies do not include coins that are locked, reserved or are otherwise not able to be sold on the market.'),
(13, 'Correction', 'A correction is a decrease in a cryptocurrency’s market price, or the entire market, after a period increase. Corrections usually occur as a result of decreased buying activity or increased selling activity investors. This change in purchasing behavior then leads to a pullback toward resistance or support levels.'),
(14, 'Crypto Exchange', 'A cryptocurrency exchange, or a digital currency exchange (DCE), is a business that allows customers to trade cryptocurrencies or digital currencies for other assets such as conventional fiat money or other digital currencies. They may accept credit card payments, wire transfer or other forms of payment in exchange for digital currencies or cryptocurrencies. Some brokerages which also focus on other assets such as stocks, like Robinhood and eTor, let users purchase but not withdraw cryptocurrencies to cryptocurrency wallets. Dedicated cryptocurrency exchanges such as Finance and Coinbase do allow withdrawals.'),
(15, 'Cryptocurrency', 'A cryptocurrency or crypto is a digital asset designed to work as a medium of exchange wherein individual ownership records are stored in a ledger existing in a form of computerized database using strong cryptography to secure transaction records, to control the creation of additional coins, and to verify the transfer of coin ownership. It typically does not exist in physical form (like paper money) and is typically not issued by central authority. <br><br>\n\nCryptocurrencies typically use decentralized control as opposed to centralized digital currency and central banking systems. When a cryptocurrency is minted or created prior  issuance or issued by a single issuer, it is generally considered centralized. When implemented with decentralized control, each cryptocurrency works through distributed ledger technology, typically a blockchain, that serves as a public financial transaction database. It is also a subset of digital currencies, however, it uses cryptography for security so this makes it extremely difficult to counterfeit. <br><br>\n\nOne important fact about all these is that they are not issued by any central authority and are independent of traditional banks. Many people do not even consider them to be money although they could eventually create extremely strong competition to traditional money. Many people do not believe in dollars, ruble, yen or any other government currency, they only believe in gold and silver but many people are also starting to believe in cryptocurrencies. “Bitcoin was created to take power out of the hands of the government and central bankers, and put it back into the hands of the people” (Gilpin, 2014).'),
(16, 'Custodial wallet', 'A custodial wallet is a digital wallet whose private keys are held by the service provider, such as an exchange. You as the customer, while you access and spend money on it, you don’t have full control of it. The service provider can stop you from moving or spending the money in the wallet if they so choose to , even though it is supposedly yours.'),
(17, 'Cold Wallet', 'A type of cryptocurrency wallet where private keys are stored strictly in an offline environment. In addition, digital transactions are also authorized offline as well. Cold wallets are considered to be more secure than hot wells and are typically used for long-term storage of private keys.'),
(18, 'dApp', 'A decentralized application (dApp) is a computer application that runs on a distributed computing system. Dapps have been popularized by distributed ledger technologies (DLT) such as the Ethereum Blockchain, where Dapps are often referred to as smart contracts.'),
(19, 'Decentralization', 'Decentralized currency, peer-to-peer, and digital currency all refer to bank-free methods of transferring wealth or ownership of any other commodity without needing a third party.<br>In a centralized network there is a central authority that governs and handles the network.\n\n<br><br>\n\n<b>Advantages :</b><br>\n\n- Command chain<br>\n- Reduced cost<br>\n- Consistent output<br><br>\n\n<b>Disadvantages :</b><br>\n\n- Not 100% trustable<br>\n- Single point of failure<br>\n- Scalability limitation<br><br>\n\nIn a decentralized network, there is no central authority that governs and handles the network.<br><br>\n\n<b>Advantages :</b><br>\n\n- Full control<br>\n- Immutable data<br>\n- High security<br><br>\n\n<b>Disadvantages :</b><br>\n\n- Costly<br>\n- Misuse of authority<br>\n- Volatility'),
(20, 'DeFi', 'Defi is an abbreviation for Decentralized Finance. It refers to any financial system that operates on blockchain technology By using decentralized networks, DeFi systems can easily transform traditional financial services like banking, borrowing and lending into permissionaless, transparent networks that can run without middlemen. DeFi platforms typicalls run smart contracts based on the Ethereum blockchain.'),
(21, 'Digital Currency', 'It is a form of virtual currency that is electronically created and stored. Some, but not all digital currencies are cryptocurrencies.'),
(22, 'Double Spending', 'Double spending is a potential flaw in the blockchain where the same coin or token is spent twice. This type of issue is unique to cryptocurrencies since digital assets can be easily copied. For example if you own 1 BTC and you send it to a merchant, you should not be able to re-spend that same coin later.<br><br>  (if you send a pdf document to your friend, you still have that pdf document; while if you send him $100, you will be less rich by $100. Bitcoin was the first ever currency to solve the double spending problem without a middlemen. Meaning that if you send him 1 BTC, you will not be able to send it again nor keep it)'),
(23, 'Fiat Money', 'Fiat money is government issued currency. It is not backed by a physical commodity, such as gold or silver, but rather by the government that is issuing it. The value of fiat money is derived from the relationship between supply and demand and the stability of the government backing it. Examples of fiat currency : US dollar, euro, sterling pound,... Fiat money gives central banks greater control over the economy because they can control how much money is printed. One danger of fiat money is that governments will print too much of it, resulting in hyperinflation.'),
(24, 'FOMO', 'FOMO is an acronym for Fear Of Missing Out. It is defined as the feeling of anxiety that arises due to not being involved or present at an exciting event. In cryptocurrency, FOMO is an emotional response that occurs due to the fear of missing out on the potential gains of a rising coin or token. FOMO is often results in impulsive purchases and bad decision making.'),
(25, 'FUD', 'FUD is an acronym for Fear Uncertainty Doubt. FUD refers to a negative statement, or series of statements meant or show a particular cryptocurrency in a negative light. It is usually done with the aim of driving down the price of a coin or token.'),
(26, 'Fundamental analysis', 'Fundamental analysis :  It consists of a group of techniques used to assess the value of a coin or token by examining its qualitative and quantitative characteristics. Some of the parameters that are analyzed in fundamental analysis include : <br><br>  - Underlying technology<br> - Coin use cases<br> - Team members and advisors<br>'),
(27, 'Fungible Token', 'First token standard to have established itself in the Ethereum ecosystem. They are referred to as ERC20 and are managed by smart contracts that present a list of minimal functions such as creating news units divided into factions, destroying or “burning” them, transferring  them to another wallet. Most of fungible tokens come from an ICO (Initial Coin Offering) and are linked to specific project, with its own value proposition.'),
(28, 'Gas', 'Gas in the Ethereum blockchain is somewhat comparable to transaction fees in the Bitcoin blockchain. All transactions on the Ethereum network require that Gas be paid to miners for performing computations to add transactions to the blockchain. Every operation on the Ethereum network requires gas, from small transactions to the execution of a smart contracts; thus gas needs to be paid even if the transactions fails.'),
(29, 'Hash rate', 'Hash rate refers to the total combined computational power that is being used to mine and process transactions on a Proof-of-Work blockchain such as Bitcoin and Ethereum. A “hash” is a fixed-length alphanumeric code that is used to represent words, messages and data of any length. Crypto projects use a variety of different hashing algorithms to create different types of hash-code. Think of them like random word generators where each algorithm is a different system for generating random words.'),
(30, 'HODL', 'HODL is a deliberate misspelling of the word HOLD. It is used to describe the action of keeping a cryptocurrency (medium to long term) in your wallet in the hopes that the price will significantly increase in the near future. During the time of HODLing, the cryptocurrency is not sold or traded. HODL originated in December 2013 on the Bitcoin talk messaging forum, where a seemingly intoxicated member by the name of GameKyuubi misspelled the word “hold” while ranting about being a lousy cryptocurrency trader. The term has also been attributed to mean Hold On for Dear Life. HODL has since gone on to become part of the cryptocurrency pop culture and has spawned thousands of memes and videos.'),
(31, 'ICO', 'An ICO is an Initial Coin Offering. It is the cryptocurrency equivalent to an initial public offering (IPO). It is designed for company looking to raise money to create a new coin, app, or service. It is a way to raise funds While IPOs deal purely with investors, ICOs may deal with supporters that are keen to invest in a new project, much like a a crowdfunding event. But ICOs differ from crowdfunding in that the backers of ICOs are motivated by a prospective return on their investments while the funds raised in crowdfunding campaigns are basically donations. For these reasons, ICOs are referred to as “crowdsales”.<br><br>\n\n<u>2 important structural differences between IPO and ICO:</u><br><br>\n\n- ICOs are largely unregulated meaning that government organizations like the SEC do not oversee them<br><br>\n- Secondly, due to their decentralization and lack of regulation, ICOs are much freer in terms of structure than IPOs.<br><br>\n\n<u>Different possible structures of ICOs :</u><br><br>\n\n- Static : the company sets a specific goal or limit for its funding, which means that each token sold in the ICO has a pre-set price and that the total token supply is static.<br><br>\n- Dynamic : there is a static supply of ICO tokens but a dynamic funding goal. This means that the distribution of tokens to investors will be dependent upon the funds received. (the more total funds received in the ICO, the higher the overall token price)<br><br>\n- Other Dynamic structure : the token supply is determined according to the amount of funding received. In these cases, the price of a token is static, but there is no limit to the number of total tokens.'),
(32, 'IEO', 'An Initial Exchange Offering (IEO) is a variant of Initial Coin Offering (ICO). IEO operates directly by cryptocurrency exchanges. The benefits are that Blockchain projects go through a comprehensive vetting process where their withe paper is scrutinized and their crowdfunding will also get publicity. Many investors tend to find IEO platforms more appealing because there’s a greater level of due diligence than what is seen with an ICO.'),
(33, 'Lambo', 'Lambo is a shortened from the word Lamborghini. Lambo is jokingly used on social media as a measure of cryptocurrency success. It is usually used in the phrase “when Lambo ?” in other words : when will the price of a cryptocurrency increase to the point where the coin holder can afford a Lamborghini.'),
(34, 'Ledger', 'A record of transactions, especially those related to finance. The record is often used to indicate who owns what and at what time. Financial institutions and systems, in particular, have to maintain ledgers to keep track of the movement of money and other assets they handle. It is important to note that much of the money in circulation today exists only on ledgers.'),
(35, 'Liquidity', 'Liquidity describes the ease at which cryptocurrency can be bought or sold on exchanges at its market price. In other words, this term tells us how quickly a digital currency can be traded. A coin or token that is liquid can be converted to another form of currency easily. On the other hand, a coin or token that has little liquidity is difficult to buy or sell.'),
(36, 'MainNet', 'Mainnet is the term used to describe when a blockchain protocol is fully developed and deployed, meaning that cryptocurrency transactions are being broadcasted, verified and recorded on a distributed ledger technology (blockchain). It is an independent blockchain running its own network with its own technology and protocol. It is a live blockchain where its own cryptocurrencies or tokens are in use, as compared to a testnet or projects running on top of other popular networks such as Ethereum.'),
(37, 'Market cap', 'Market capitalization, also commonly referred to as “market cap”, is a measure of the total dollar value worth of a cryptocurrency or blockchain project.It is calculated by multiplying the number of coins currently in circulation by the latest unit price of the coin or token.<br><br>  Market cap **=** Circulating supply * Price per coin/token'),
(38, 'NFT', 'A non-fungible token (often referred to as NFT) is a special type of cryptographic token which represents something unique. NFTs are called non-fungible tokens because they are not mutually interchangeable, since they contain unique information, although it is possible to mint any number of NFTs representing the same object. This is in contrast to cryptocurrencies like bitcoin, and many network or utility tokens, that are fungible in nature. 1 BTC = 1 BTC but 1 NFT will not be equal to another NFT.'),
(39, 'Open Source', 'Open-source describes any software application whose source code is free available to the public. Since the code is in the public domain, anyone can use modify, enhance or share it as they see fit. Open-source project thrive on open exchange, collaboration, transparency and community.oriented development. Some of the most popular examples of successful open-source projects include Linux. Ubuntu and Mozilla Firefox.'),
(40, 'P2P', 'Peer-to-Peer or P2P is a type of system in which computers in a network are directly connected to each other via the internet. This type of system allows files and other peripherals to be accessed and shared directly from one person to another without the need for a central server. In other words, each computer on the peer-to-peer network acts as the server as well as the client.'),
(41, 'Private Key', 'A sting of numbers and letters that is used to access your crypto wallet. Your wallet is represented by a public key, while the private key is the password you should protect to access it.'),
(42, 'PoS', 'Proof of stake (PoS) is a type of algorithm whereby a cryptocurrency blockchain achieves distributed consensus. The concept of PoS is that the creator of the next block (i.e group of validated transactions) is selected based specific criteria including the amount of and age of cryptocurrency they hold (i.e. ther stake).'),
(43, 'PoW', ' Proof of work (PoW) consensus algorithms require miners to solve computationally intensive mathematical functions to validate transactions and create new blocks.'),
(44, 'RoI', 'Return on investment (ROI) is defined as a measure of how well an asset is expected to perform in terms of financial gains. ROI is calculated by dividing the return of a particular cryptocurrency investment by its initial cost and is typically expressd as a percentage. For example, a cryptocurrency which has a 100% ROI has the potential to double someone’s money.'),
(45, 'Security Token', 'Based on the ERC20 (fungible token), security tokens include assets that require compliance with financial law. They represent financial products in the traditional sense, such as shares, bonds, debts and property titles. Hence, they follow rules of traditional products and investment or trading in these assets is limited to the so-called “qualified” investors. They are referred to as ERC 1411, and unlike traditional ERC20 (fungible tokens), a third party is responsible for authorizing or not the transfer of these digital objects in order to comply with the law. The authorization is managed by the smart contract through which these assets were generated.'),
(46, 'SmartContract', 'A smart contract is a computer program or transaction protocol which is intended to automatically execute, control or document legally relevant events and actions according to the terms of a contract or an agreement. The objectives of smart contracts are the reduction of need in trusted intermediators, arbitrations and enforcement costs, fraud loss, as well as the reduction of malicious and accidental exceptions. Vending machines are mentioned as the oldest piece of technology equivalent to smart contract implementation. Since Ethereum, various cryptocurrencies support scripting languages which allow for more advanced smart contracts between untrusted parties. Smart contracts should be distinguished from smart legal contracts. The latter refers to  a traditional natural language legally-binding agreement which has certain terms expressed and implemented in machine-readable code.'),
(47, 'StableCoin', 'Stablecoins are cryptocurrencies designed to minimize the volatility of the price of the stablecoin, relative to some “stable” asset or basket of assets. A stablecoin can be pegged to cryptocurrency, fiat money, or to exchange-traded commodities (such as precious metals or industrial metals). Stablecoins redeemable in currency, commodities, or fiat money are said to be backed, whereas those tied to an algorithm are referred to as not backed.'),
(48, 'Staking', 'Staking is defined as “locking up” a certain amount of cryptocurrency in digital wallet to be used as collateral. Staking is a requirement in proof of stake consensus blockchains, whereby an individual is eligible to verify, process, and record transactions based on the amount of cryptocurrency they have staked.'),
(49, 'Staking Pool', 'A staking pool is a staking wallet with assets from the different participants in the proof of stake (PoS) system. By putting their money in that smart contract the participants increase their chance of winning the protocol reward, which they can then share.'),
(50, 'TestNet', 'A testnet is an alternative blockchain used for conducting experiments without using actual currency. This term is short for “testing network”. Therefore any changes done on this network do not affect the main blockchain. Testnet are also meant to be used solely by developers; however, some users may also be invited to help test new features.'),
(51, 'Token', 'A token, in the Blockchain ecosystem, is any asset that is digitally transferable between 2 people. They are issued on a blockchain; on the Ethereum blockchain for example. Depending on the properties assigned to them, they have different classification and uses. <br>  The 3 main types of tokens are :<br>  - Fungible tokens<br> - Non-fungible tokens<br> - Security tokens<br>'),
(52, 'Virtual Currency', 'In 2012 the European Central Bank defined a virtual currency as \"a type of unregulated, digital money, which is issued and usually controlled by its developers, and used and accepted among the members of a specific virtual community.\" The US Department of Treasury states that although a digital currency operates just like a traditional currency, it does not have the same attributes.'),
(53, 'Whale', 'A whale is defined as a person or organization that owns a large amount of a particular cryptocurrency. The quantity of cryptocurrency owned by whales is usually enough to affect the market, giving them the ability to manipulate prices. Crypto whales are name after the sea mammal due to their huge size in comparison to other sea creature such as fish.'),
(54, 'WhitePaper', 'A White paper is a document prepared by a coin’s developer outlining the necessary details of the blockchain project. It contains essential information, such as objectives, roadmaps, team members, and advisors. The primary purpose of the withe paper is to educate, market, and create interest for potential buyers.');

-- --------------------------------------------------------

--
-- Structure de la table `txUser`
--

CREATE TABLE `txUser` (
  `id_txUser` int(11) NOT NULL,
  `txType` varchar(20) NOT NULL,
  `tx_publicKey` varchar(50) DEFAULT NULL,
  `fiatvalue` double NOT NULL,
  `iBSWNamount` double NOT NULL,
  `executiondate` datetime NOT NULL,
  `assetID` varchar(20) DEFAULT NULL,
  `assetAmount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `txUser`
--

INSERT INTO `txUser` (`id_txUser`, `txType`, `tx_publicKey`, `fiatvalue`, `iBSWNamount`, `executiondate`, `assetID`, `assetAmount`) VALUES
(1, 'DEPOSIT', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 1830, 915, '2021-12-09 08:14:21', 'UOS', 1000),
(2, 'DEPOSIT', 'ugza60z3g4718s2h87ov019nvd9ckfe6o4naslum', 455, 227.5, '2021-12-09 08:15:12', 'AUDIO', 250),
(3, 'DEPOSIT', 'm9r53ehgo0ocliv8ufcxqy0wn68lwnq1d3btma7j', 72.55, 36.275, '2021-12-09 08:16:06', 'AURY', 5),
(4, 'WITHDRAWAL', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 182, 90.990351174824, '2021-12-09 08:17:33', 'AUDIO', 100),
(5, 'DEPOSIT', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 5306.8971526009, 2875.1674745957, '2021-12-10 04:40:19', 'EGLD', 20),
(6, 'DEPOSIT', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 114.99427370552, 62.301526865061, '2021-12-10 04:43:05', 'PKN', 1500),
(7, 'DEPOSIT', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 835, 447.28935315351, '2021-12-10 05:46:03', 'UOS', 500),
(8, 'DEPOSIT', 'ymzfn64ot5spjv7030xleyjul63f7tvqsd1o94hp', 1458, 781.01542143452, '2021-12-10 05:46:23', 'AUDIO', 900),
(9, 'WITHDRAWAL', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 84.93, 50.056037374265, '2021-12-19 12:40:31', 'UOS', 57);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `publicKey` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateinscription` datetime NOT NULL,
  `balance` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `publicKey`, `email`, `dateinscription`, `balance`) VALUES
(1, 'oscarmac', '1tarygpo8klsd3j5aj6ie5cwf0n8zdh4luob7zgn', 'macieiraoscar@icloud.com', '2021-12-09 08:13:46', 4158.711966065182),
(2, 'elvisbubu', 'ugza60z3g4718s2h87ov019nvd9ckfe6o4naslum', 'elvis.buxton@gmail.com', '2021-12-09 08:14:04', 227.5),
(3, 'drmwaw', 'm9r53ehgo0ocliv8ufcxqy0wn68lwnq1d3btma7j', 'toufic@tager', '2021-12-09 08:15:52', 36.275),
(4, 'michelbastos', 'ymzfn64ot5spjv7030xleyjul63f7tvqsd1o94hp', 'omacieira@myges.fr', '2021-12-10 05:45:53', 781.01542143452),
(5, 'Alex', '3ituqiw254d8p9nxsh0txfujqlao9bhobnzclr5z', 'alex@lelong', '2021-12-19 14:14:12', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wallet`
--

CREATE TABLE `wallet` (
  `id_wallet` int(11) NOT NULL,
  `walletName` varchar(20) DEFAULT NULL,
  `Chain` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `walletAdress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wallet`
--

INSERT INTO `wallet` (`id_wallet`, `walletName`, `Chain`, `Type`, `walletAdress`) VALUES
(1, 'Eth1', 'Ethereum', 'Cold', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ibswn`
--
ALTER TABLE `ibswn`
  ADD PRIMARY KEY (`date`);

--
-- Index pour la table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id_term`);

--
-- Index pour la table `txUser`
--
ALTER TABLE `txUser`
  ADD PRIMARY KEY (`id_txUser`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_wallet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `term`
--
ALTER TABLE `term`
  MODIFY `id_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `txUser`
--
ALTER TABLE `txUser`
  MODIFY `id_txUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id_wallet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
