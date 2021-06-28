<?php include("pre.php"); ?>

<!-- // MENU //////////////////////////////////////////////////////// -->

<div class="menu">
		
	<a href="index"><div class="menu-items">
		Home
	</div></a>

	<a href="cv"><div class="menu-items">
		Curriculum Vitae
	</div></a>
			
	<a href="publications"><div class="menu-items-active">
		Publications
	</div></a>

	<a href="teaching"><div class="menu-items">
		Teaching
	</div></a>

</div>

<!-- // PAPERS ////////////////////////////////////////////////////////////////// -->
		
<div class="cv-section fixed">
		
	<h2 class="cv-section-name">Papers</h2>
			
	<div class="cv-section-items">

		<!--<div class="item">
			<h4>(July 2012)</h4>
			<h2>The Collatz conjecture and De Bruijn graphs</h2>
			<h3><u>Thijs Laarhoven</u>, Benne de Weger</h3>

			<p><strong><i>
				In preparation.
			</i></strong></p>
		</div>-->

		<!--<div class="item">
			<h4>(July 2012)</h4>
			<h2>An introduction to lattices and lattice-based cryptography</h2>
			<h3><u>Thijs Laarhoven</u>, Joop van de Pol, Benne de Weger</h3>

			<p><strong><i>
				In preparation.
			</i></strong></p>
		</div>-->

		<div class="item">
			<h4>(June 2012)</h4>
			<h2>Dynamic Traitor Tracing for Arbitrary Alphabets: Divide and Conquer</h2>
			<h3><u>Thijs Laarhoven</u>, Jan-Jaap Oosterwijk, Jeroen Doumen</h3>
			
			<p>We give a generic divide-and-conquer approach for constructing 
			collusion-resistant probabilistic dynamic traitor tracing schemes 
			with larger alphabets from schemes with smaller alphabets. This 
			construction offers a linear tradeoff between the alphabet size 
			and the codelength. In particular, we show that applying our 
			results to the binary dynamic Tardos scheme of Laarhoven et al. 
			leads to schemes that are shorter by a factor equal to half the 
			alphabet size. Asymptotically, these codelengths correspond, up 
			to a constant factor, to the fingerprinting capacity for static 
			probabilistic schemes. This gives a hierarchy of probabilistic 
			dynamic traitor tracing schemes, and bridges the gap between the 
			low bandwidth, high codelength scheme of Laarhoven et al. and the 
			high bandwidth, low codelength scheme of Fiat and Tassa.</p>

			<p><strong><i>
				Submitted / 
				<a href="http://arxiv.org/abs/1206.6720">Preprint</a>
			</i></strong></p>
		</div><!-- end .item -->

		<div class="item">
			<h4>(November 2011)</h4>
			<h2>Dynamic Tardos Traitor Tracing Schemes</h2>
			<h3><u>Thijs Laarhoven</u>, Jeroen Doumen, Peter Roelse, Boris Skoric, Benne de Weger</h3>

			<p>We construct binary dynamic traitor tracing schemes, where the 
			number of watermark bits needed to trace and disconnect any 
			coalition of pirates is quadratic in the number of pirates, and 
			logarithmic in the total number of users and the error probability. 
			Our results improve upon results of Tassa, and our schemes have 
			several other advantages, such as being able to generate all 
			codewords in advance, a simple accusation method, and flexibility 
			when the feedback from the pirate network is delayed.</p>

			<p><strong><i>
				Submitted / 
				<a href="http://arxiv.org/abs/1111.3597">Preprint</a> / 
				<a href="http://www.win.tue.nl/~thijs/docs/Dynamic%20Tardos%20traitor%20tracing%20schemes%20-%20Laarhoven%20et%20al.%20(2011,%20slides).pdf">Slides</a>
			</i></strong></p>
		</div><!-- end .item -->

		<div class="item last-item">
			<h4>(July 2011)</h4>
			<h2>Optimal Symmetric Tardos Traitor Tracing Schemes</h2>
			<h3><u>Thijs Laarhoven</u>, Benne de Weger</h3>

			<p>For the Tardos traitor tracing scheme, we show that by combining 
			the symbol-symmetric accusation function of Skoric et al. with the 
			improved analysis of Blayer and Tassa we get further improvements. 
			Our construction gives codes that are up to four times shorter than 
			Blayer and Tassa's, and up to two times shorter than the codes from 
			Skoric et al. Asymptotically, we achieve the theoretical optimal 
			codelength for Tardos' distribution function and the symmetric score 
			function. For large coalitions, our codelengths are asymptotically 
			about 4.93% of Tardos' original codelengths, which also improves 
			upon results from Nuida et al.</p>

			<p><strong><i>
				Designs, Codes and Cryptography / 
				<a href="http://www.springerlink.com/content/e87333654577h81p/">SpringerLink</a> /
				<a href="http://arxiv.org/abs/1107.3441">Preprint</a>
			</i></strong></p>
		</div><!-- end .item -->

	</div><!-- end .cv-section-items -->
			
</div><!-- end .cv-section -->

<!-- // PATENTS ////////////////////////////////////////////////////////////////// -->
		
<div class="cv-section fixed">
		
	<h2 class="cv-section-name">Patents</h2>
			
	<div class="cv-section-items">

		<div class="item last-item">
			<h4>(June 2011)</h4>
			<h2>Dynamic fingerprinting</h2>
			<h3>Jeroen Doumen, <u>Thijs Laarhoven</u>, Peter Roelse</h3>

			<p><strong><i>
				Irdeto Corporate BV
			</i></strong></p>
		</div><!-- end .item -->

	</div><!-- end .cv-section-items -->
			
</div><!-- end .cv-section -->
		
<!-- // THESES ////////////////////////////////////////////////////////////////// -->
		
<div class="cv-section last-cv-section fixed">
		
	<h2 class="cv-section-name">Theses</h2>
			
	<div class="cv-section-items">

		<div class="item">
			<h4>(July 2011)</h4>
			<h2>Collusion-resistant traitor tracing schemes</h2>
			<h3><u>Thijs Laarhoven</u></h3>

			<p>To protect digital content from unauthorized redistribution, 
			distributors embed watermarks in the content to link copies to users. 
			By cooperating and combining their watermarks, several colluders can 
			create a copy which has a watermark that is different from each of 
			their individual watermarks. The first part of this thesis contains 
			an overview of the state of the art solutions for this problem. In
			the second part, improvements to known schemes are investigated. We
			show that by improving upon the analysis done by Skoric et al. and 
			Blayer and Tassa, the codelength of the Tardos scheme can be further
			reduced, and we present the optimal asymptotic first order constants.
			We also present a whole new dynamic scheme based on the Tardos scheme,
			improving upon earlier results by Tassa and with codelengths that can
			even compete with the higher alphabet codelengths of Fiat and Tassa.</p>

			<p><strong><i>
				Masters thesis / 
				<a href="http://www.win.tue.nl/~thijs/docs/Collusion-resistant%20traitor%20tracing%20schemes%20-%20Laarhoven%20(2011).pdf">Final version</a> / 
				<a href="http://www.win.tue.nl/~thijs/docs/Collusion-resistant%20traitor%20tracing%20schemes%20-%20Laarhoven%20(2011,%20slides,%20TUe).pdf">Slides</a> /
				<a href="http://www.win.tue.nl/~thijs/docs/Collusion-resistant%20traitor%20tracing%20schemes%20-%20Laarhoven%20(2011,%20slides,%20Irdeto).pdf">Slides</a>
			</i></strong></p>
		</div><!-- end .item -->
				
		<div class="item last-item">
			<h4>(July 2009)</h4>
			<h2>The Collatz conjecture</h2>
			<h3><u>Thijs Laarhoven</u></h3>

			<p>The Collatz conjecture is an unsolved conjecture in number theory. 
			The 3n+1 function T is defined as T(n) = n/2 if n is even, and T(n) = 
			3n+1 if n is odd. The Collatz conjecture states that for any positive 
			integer n, the sequence {n, T(n), T(T(n)), T(T(T(n))), ...} contains 
			the number 1. In this report, we look at various approaches to this 
			problem. We look at the infinite Collatz graph, its adjacency matrix 
			and its eigenvectors to learn more about the Collatz conjecture, and the 
			consequences of the existence of other cycles or divergent trajectories. 
			We also look at what we introduce as Collatz modular graphs to 
			investigate properties of the Collatz conjecture when applied to 
			congruence classes. A special case of these graphs is shown to be 
			isomorphic to De Bruijn graphs, which has several interesting consequences.</p>	

			<p><strong><i>
				Bachelors thesis / 
				<a href="http://www.win.tue.nl/~thijs/docs/The%203n+1%20conjecture%20-%20Laarhoven%20(2009).pdf">Final version</a> / 
				<a href="http://www.win.tue.nl/~thijs/docs/The%203n+1%20conjecture%20-%20Laarhoven%20(2009,%20slides).pdf">Slides</a>
			</i></strong></p>
		</div><!-- end .item -->

	</div><!-- end .cv-section-items -->
			
</div><!-- end .cv-section -->

<!-- ////////////////////////////////////////////////////////////////////////////// -->
	
<?php include("post.php"); ?>