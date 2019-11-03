<section class="header1 cid-rFjYxjhEtJ mbr-parallax-background" id="header16-v">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">OUTDOOR</h1>
            </div>
        </div>
    </div>
</section>

<section class="features19 cid-rFh1Nopgcw" id="features19-2h">
  <div class="container">
        <div class="row justify-content-center">
            <div class="title col-lg-12" style="color: white">
<!--              <h1>Wardrobe</h1>-->
				<span><a class="link-nav" href="javascript:toOtherPage('<?= base_url();?>')">Home</a> > <a class="link-nav" href="javascript:toOtherPage('<?= base_url();?>OutdoorCatalogue/')">Outdoor</a> > <a class="link-nav" href="javascript:toOtherPageWspace('<?=$productCategory;?>')" id="productCategoryLink"></a> > <b id="productNameLink"></b></span>
            </div>
        </div>
  </div>

  <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="media-container-column col-lg-12" data-form-type="formoid">
				<div class="dragArea row">
					<div class="col-lg-6" data-for="name" style="color: white;padding-left: 0px">
						<img src="" alt="" class="form-control" style="padding: 0px;border: none;border-radius: 20px" id="productImage">
					</div>
					<div class="col-lg-6" data-for="name" style="color: white;padding-left: 50px;">
						<div class="row">
							<span id="productName" style="font-weight: bold;font-size: 52px"></span>
						</div>
						<div class="row">
							<p id="desc" style="color: white"></p>
						</div>
						<div class="row" style="margin-top: 60px;">
							<span id="price" style="font-size:46px;font-weight:bold;line-height: 0px"></span>
						</div>
						<div class="row" style="margin-top:40px;">
							<div style="border-top: 1px solid #808080;border-bottom:1px solid #808080;width: 100%;padding: 10px;text-align: center">
								<span id="stock" style="color: #808080;font-size: 18px"></span>
							</div>
						</div>
						<div class="row" style="margin-top: 20px;">
							<div class="col-lg-4" style="transform: translateY(25%);padding: 0px">
								<span >Amount Purchased :</span>
							</div>
							<div class="col-lg-8" style="padding: 0px;width: 100%;">
								<div class="row">
									<button onClick="minStock()" id="btn-stock-min" style="background-color: transparent;border: 2px white solid;color: white;font-size: 18px;padding: 10px;margin: 0px;font-weight: bold">-</button>
									<input value="1" readonly id="input-stock" type="text" onKeyPress="isInputNumber(event)" style="background-color: transparent;border: none; border-top: 2px solid #808080;border-bottom: 2px solid #808080;padding: 10px;color: white;font-size: 18px;margin: 0px;text-align: center"> 
									<button onClick="plusStock()" id="btn-stock-plus" style="background-color: transparent;border: 2px white solid;color: white;font-size: 18px;padding: 10px;margin: 0px;font-weight: bold">+</button>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 70px">
							<button id="btn-add-cart" style="width: 100%;padding: 10px;border-radius: 16px;background-color: #D2C919;border: none;font-size: 24px;font-weight: bold">
								<i class="fas fa-cart-plus"></i>
								Add to Cart
							</button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
	
	<div class="container" style="text-align: center;margin-top: 120px">
        <div class="row justify-content-center">
            <div class="title col-lg-12" style="color: white">
              <h1>Detail's Product</h1>
            </div>
        </div>
  	</div>
	
	<div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="media-container-column col-lg-12" data-form-type="formoid">
				<div class="dragArea row">
					<div class="col-md-4  form-group" data-for="name" style="color: white" id="myDIV">
						<button class="row dropdown_menu active" id="btnMainF">
							<div class="col-9 dropdown_menu">
								<span>Main Features</span>
							</div>
							<div class="col-3 dropdown_menu">
								<i class="fas fa-chevron-right"></i>
							</div>
						</button>
						<button class="row dropdown_menu" id="btnProductS">
							<div class="col-9 dropdown_menu">
								<span>Product Size</span>
							</div>
							<div class="col-3 dropdown_menu">
								<i class="fas fa-chevron-right"></i>
							</div>
						</button>
						<button class="row dropdown_menu" id="btnProductM">
							<div class="col-9 dropdown_menu">
								<span>Product Material</span>
							</div>
							<div class="col-3 dropdown_menu">
								<i class="fas fa-chevron-right"></i>
							</div>
						</button>
						<button class="row dropdown_menu" id="btnCareI">
							<div class="col-9 dropdown_menu">
								<span>Care Instructions</span>
							</div>
							<div class="col-3 dropdown_menu">
								<i class="fas fa-chevron-right"></i>
							</div>
						</button>
						<button class="row dropdown_menu" id="btnAdditionalI">
							<div class="col-9 dropdown_menu">
								<span>Additional Informations</span>
							</div>
							<div class="col-3 dropdown_menu">
								<i class="fas fa-chevron-right"></i>
							</div>
						</button>
					</div>
					<div class="col-md-8  form-group" data-for="name" style="color: white;background-color: #808080;">
						<div id="mainFeatures" style="display: block">
							<div style="font-weight: bold;font-size: 28px">Main Features</div>
							<div>
								<span id="mf_detail">
								</span>
							</div>
						</div>
						<div id="productSize" style="display: none">
							<div style="font-weight: bold;font-size: 28px">Product Measurements</div>
							<div>
								<span>Width: 100,3 cm</span>
							</div>
							<div>
								<span>Depth: 48,2 cm</span>
							</div>
							<div>
								<span>Height: 123,1 cm</span>
							</div>
						</div>
						<div id="productMaterial" style="display: none">
							<div style="font-weight: bold;font-size: 28px">Materials</div>
							<div>
								<span><strong>Top panel / Bottom panel / Shelf: </strong>Particleboard, Acrylic paint, Paper foil, Plastic edging</span>
							</div>
							<div>
								<span><strong>Side panel: </strong>Particleboard, Acrylic paint, Plastic edging</span>
							</div>
							<div>
								<span><strong>Back panel/ Front rail/ Back rail/ Door frame: </strong>Fibreboard, Acrylic paint</span>
							</div>
							<div>
								<span><strong>Plinth front: </strong>Particleboard, Acrylic paint</span>
							</div>
							<div>
								<span><strong>Plinth back: </strong>Particleboard</span>
							</div>
							<div>
								<span><strong>Door filling: </strong>Tempered glass</span>
							</div>
						</div>
						<div id="careInstruction" style="display: none">
							<div style="font-weight: bold;font-size: 28px">Care Instructions</div>
							<div>
								<span>Wipe clean with a cloth dampened in a mild cleaner.</span>
							</div>
							<div>
								<span>Wipe dry with a clean cloth.</span>
							</div>
						</div>
						<div id="additionalInformation" style="display: none">
							<div style="">
								<div style="font-weight: bold;font-size: 28px">Benefits</div>
								<div>
									<p style="color: white">The glass doors allows you to see your things, while protecting them from dust. Sliding doors allow more room for furniture because they don’t take any space to open. SYVDE cabinet with glass doors is a perfect companion for MALM chest of 6 drawers. Adjustable shelves make it easy to customise the space according to your needs. </p>
								</div>
							</div>
							<div style="margin-top: 50px!important">
								<div style="font-weight: bold;font-size: 28px;">Good to Know</div>
								<div>
									<p style="color: white;">WARNING! TIPPING HAZARD – Unanchored furniture can tip over. This furniture shall be anchored to the wall with the enclosed safety fitting to prevent it from tipping over.<br><br>Different wall materials require different types of fixing devices. Use fixing devices suitable for the walls in your home.<br><br>One shelf holds about 20 pairs of folded trousers or 40 T-shirts.<br><br>Holds min. 16 pairs of shoes.</p>
								</div>
							</div>
							<div style="margin-top: 50px!important;margin-bottom: 10px!important">
								<div style="font-weight: bold;font-size: 28px">Designer</div>
								<div>
									<span>JULIFINE of Indonesia</span>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
<script>  
	
	function nReplacer(string){
		return string.replace(/ n /g," & ");
	}
	
	function stringSplit(string){
		return string.replace(/%20/g," ");
	}
	
	function stringParagraf(string){
		return string.replace(/\n/g,"<br>");
	}
	
	function detailProduct(){
		var mainF = document.getElementById("btnMainF");
		var productS = document.getElementById("btnProductS");
		var productM = document.getElementById("btnProductM");
		var careI = document.getElementById("btnCareI");
		var additionalI = document.getElementById("btnAdditionalI");
		
		mainF.onclick = function(){
			document.getElementById("mainFeatures").style.display = "block";
			document.getElementById("productSize").style.display = "none";
			document.getElementById("productMaterial").style.display = "none";
			document.getElementById("careInstruction").style.display = "none";
			document.getElementById("additionalInformation").style.display = "none";
		}
		
		productS.onclick = function(){
			document.getElementById("mainFeatures").style.display = "none";
			document.getElementById("productSize").style.display = "block";
			document.getElementById("productMaterial").style.display = "none";
			document.getElementById("careInstruction").style.display = "none";
			document.getElementById("additionalInformation").style.display = "none";
		}
		
		productM.onclick = function(){
			document.getElementById("mainFeatures").style.display = "none";
			document.getElementById("productSize").style.display = "none";
			document.getElementById("productMaterial").style.display = "block";
			document.getElementById("careInstruction").style.display = "none";
			document.getElementById("additionalInformation").style.display = "none";
		}
		
		careI.onclick = function(){
			document.getElementById("mainFeatures").style.display = "none";
			document.getElementById("productSize").style.display = "none";
			document.getElementById("productMaterial").style.display = "none";
			document.getElementById("careInstruction").style.display = "block";
			document.getElementById("additionalInformation").style.display = "none";
		}
		
		additionalI.onclick = function(){
			document.getElementById("mainFeatures").style.display = "none";
			document.getElementById("productSize").style.display = "none";
			document.getElementById("productMaterial").style.display = "none";
			document.getElementById("careInstruction").style.display = "none";
			document.getElementById("additionalInformation").style.display = "block";
		}
	}
	
	function plusStock(){
		console.log(document.getElementById("input-stock").value);
		var value = parseInt(document.getElementById("input-stock").value);
		var result = value + 1;
		document.getElementById("input-stock").value = result;
	}
	
	function minStock(){
		console.log(document.getElementById("input-stock").value);
		var value = document.getElementById("input-stock").value;
		if (value != 1){
			document.getElementById("input-stock").value = value-1;
		}
	}
	
	var btnContainer = document.getElementById("myDIV");
	var btns = btnContainer.getElementsByClassName("dropdown_menu");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		if (current.length > 0) {
		  current[0].className = current[0].className.replace(" active", "");
		}
		this.className += " active";
	  });
	} 
	
	window.onload = loadView;
	
	function loadView(){
		firebase.auth().onAuthStateChanged(function(user){
			if	(user){
				firebase.database().ref("users").once('value', function(snapshot) {
					snapshot.forEach(function(childSnapshot) {
						var childKey = childSnapshot.key;
						var childData = childSnapshot.val();
						if(user.uid == childKey){
							if(childData.type == "user"){
								const formatter = new Intl.NumberFormat('en-US', {
								  style: 'currency',
								  currency: 'IDR',
								  minimumFractionDigits: 0
								});

								var sub = stringSplit('<?=$productCategory?>');
								var productName = stringSplit("<?=$productName?>");

								var newSub = nReplacer(sub);

								document.getElementById("productCategoryLink").innerHTML = newSub;
								document.getElementById("productNameLink").innerHTML = productName;


								if (productName != null){
									var child = [];
									firebase.database().ref("products/Outdoor/"+newSub).once('value', function(snapshot) {
										snapshot.forEach(function(childSnapshot) {
											var childKey = childSnapshot.key;
											var childData = childSnapshot.val();
											child.push(childData);
										});
										if(child.length != 0){
											for(i = 0; i < child.length; i++){
											if(productName == child[i].productName){
												var priced = formatter.format(child[i].price);		
												document.getElementById("productName").innerHTML = child[i].productName;
												document.getElementById("price").innerHTML = priced;
												document.getElementById("stock").innerHTML = child[i].stock+" stock available and ready to deliver";
												document.getElementById("desc").innerHTML = stringParagraf(child[i].desc);
												document.getElementById("productImage").src = child[i].productImage;
												document.getElementById("productImage").style.height = "500px";
												document.getElementById("productImage").style.width = "500px";
												document.getElementById("mf_detail").innerHTML = "A showcase for your finest things, keeping them safe and dust-free – and the sliding doors don’t take up any space when open. "+productName+" cabinet with glass doors is a perfect companion for MALM chest of 6 drawers.";
												break;
											}else{
												if(productName != child[i].productName && i == child.length-1){
													window.location = "<?= base_url();?>OutdoorCatalogue/roomProduct/<?=$productCategory;?>";
												}
											}
										}
										}else{
											window.location = "<?= base_url();?>OutdoorCatalogue/roomProduct/<?=$productCategory;?>";
										}
									});
								}
								detailProduct();
							}else{
								const formatter = new Intl.NumberFormat('en-US', {
								  style: 'currency',
								  currency: 'IDR',
								  minimumFractionDigits: 0
								});

								var sub = stringSplit('<?=$productCategory?>');
								var productName = stringSplit("<?=$productName?>");

								var newSub = nReplacer(sub);

								document.getElementById("productCategoryLink").innerHTML = newSub;
								document.getElementById("productNameLink").innerHTML = productName;


								if (productName != null){
									var child = [];
									firebase.database().ref("products/Livingroom/"+newSub).once('value', function(snapshot) {
										snapshot.forEach(function(childSnapshot) {
											var childKey = childSnapshot.key;
											var childData = childSnapshot.val();
											child.push(childData);
										});
										if(child.length != 0){
											for(i = 0; i < child.length; i++){
											if(productName == child[i].productName){
												var priced = formatter.format(child[i].price);		
												document.getElementById("productName").innerHTML = child[i].productName;
												document.getElementById("price").innerHTML = priced;
												document.getElementById("stock").innerHTML = child[i].stock+" stock available and ready to deliver";
												document.getElementById("desc").innerHTML = stringParagraf(child[i].desc);
												document.getElementById("productImage").src = child[i].productImage;
												document.getElementById("productImage").style.height = "500px";
												document.getElementById("productImage").style.width = "500px";
												document.getElementById("mf_detail").innerHTML = "A showcase for your finest things, keeping them safe and dust-free – and the sliding doors don’t take up any space when open. "+productName+" cabinet with glass doors is a perfect companion for MALM chest of 6 drawers.";
												break;
											}else{
												if(productName != child[i].productName && i == child.length-1){
													window.location = "<?= base_url();?>LivingroomCatalogue/roomProduct/<?=$productCategory;?>";
												}
											}
										}
										}else{
											window.location = "<?= base_url();?>LivingroomCatalogue/roomProduct/<?=$productCategory;?>";
										}
									});
								}
								detailProduct();
								var btn_add = document.getElementById("btn-add-cart");
								btn_add.onclick = function(){
									deleteAlert();
								}
							}
						}
					});
				});
			}else{
				const formatter = new Intl.NumberFormat('en-US', {
				  style: 'currency',
				  currency: 'IDR',
				  minimumFractionDigits: 0
				});

				var sub = stringSplit('<?=$productCategory?>');
				var productName = stringSplit("<?=$productName?>");

				var newSub = nReplacer(sub);

				document.getElementById("productCategoryLink").innerHTML = newSub;
				document.getElementById("productNameLink").innerHTML = productName;


				if (productName != null){
					var child = [];
					firebase.database().ref("products/Outdoor/"+newSub).once('value', function(snapshot) {
						snapshot.forEach(function(childSnapshot) {
							var childKey = childSnapshot.key;
							var childData = childSnapshot.val();
							child.push(childData);
						});
						if(child.length != 0){
							for(i = 0; i < child.length; i++){
							if(productName == child[i].productName){
								var priced = formatter.format(child[i].price);		
								document.getElementById("productName").innerHTML = child[i].productName;
								document.getElementById("price").innerHTML = priced;
								document.getElementById("stock").innerHTML = child[i].stock+" stock available and ready to deliver";
								document.getElementById("desc").innerHTML = stringParagraf(child[i].desc);
								document.getElementById("productImage").src = child[i].productImage;
								document.getElementById("productImage").style.height = "500px";
								document.getElementById("productImage").style.width = "500px";
								document.getElementById("mf_detail").innerHTML = "A showcase for your finest things, keeping them safe and dust-free – and the sliding doors don’t take up any space when open. "+productName+" cabinet with glass doors is a perfect companion for MALM chest of 6 drawers.";
								break;
							}else{
								if(productName != child[i].productName && i == child.length-1){
									window.location = "<?= base_url();?>OutdoorCatalogue/roomProduct/<?=$productCategory;?>";
								}
							}
						}
						}else{
							window.location = "<?= base_url();?>OutdoorCatalogue/roomProduct/<?=$productCategory;?>";
						}
					});
				}
				detailProduct();
				var btn_add = document.getElementById("btn-add-cart");
				btn_add.onclick = function(){
					deleteAlert();
				}
			}			
		});
	}
	
	function deleteAlert(){
		const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
			confirmButton: 'btn btn-hijau',
			cancelButton: 'btn btn-merah'
		  },
		  buttonsStyling: false
		})

		swalWithBootstrapButtons.fire({
		  title: 'You are not logged in',
		  text: "You must be logged in to be able add an items to your cart",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Login now',
		  cancelButtonText: 'No, cancel',
		  reverseButtons: true
		}).then((result) => {
		  if (result.dismiss === Swal.DismissReason.cancel) {
			swalWithBootstrapButtons.fire(
			  'Cancelled',
			  '',
			  'error'
			)
		  }else if (result.dismiss){
			  swalWithBootstrapButtons.fire(
				  'Cancelled',
				  '',
				  'error'
			  );
		  }else{
			  toOtherPage('<?= base_url();?>Landing/login');
		  }
		});
	}
	
	function toOtherPageWspace(base_url){
		var productCategory = stringSplit(base_url);
		window.location = "<?= base_url();?>LivingroomCatalogue/roomProduct/"+productCategory;
	}
	
	function toOtherPage(base_url){
		window.location = base_url;
	}
            
</script>