
            <!-- main content -->
           

            <div class="min-h-screen flex flex-col">
        <header class="bg-[#234664] text-white p-6 shadow-lg">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div class="flex items-center space-x-3">
                    <a href="#" class="text-3xl font-bold tracking-wide">
                        <img class="block absolute w-[78px] h-[78px] top-1 left-3 rounded-full" src="http://ndiaga.lo:8743/projetCargo/dist/images/sohn'sCargo.jpeg" alt=""> <div class="ml-20" >Sohn's Cargos</div>
                    </a>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="nav-link  text-white text-lg hover:border-b-2  font-medium">Home</a>
                    <a href="#" class="nav-link text-white text-lg hover:border-b-2  font-medium">Ajouter Coli</a>
                </nav>
                <div class="flex items-center space-x-3">
                    <a href="#" class="btn bg-[#2596be] border-0 p-2 rounded-lg text-white btn-sm">Sign In</a>
                    <a href="#" class="btn bg-[#2596be] border-0 p-2 rounded-lg text-white btn-sm">Sign Up</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
                </div>
            </div>
        </header>
        <section class="bg-[#3b85b2] text-white py-20">
            <div class="container mx-auto text-center">
                <h1 class="text-5xl font-bold mb-6">Bienvenue sur Sohn's Cargos</h1>
                <p class="text-xl mb-6">La solution ultime pour la gestion de vos colis et cargaisons</p>
                <a href="#" class="btn btn-lg border-0 px-5 py-3 rounded-lg bg-[#234664] text-white">Découvrir</a>
            </div>
        </section>
        <main class="flex-grow container mx-auto p-8">
        <div class="flex-1 p-4">
               <?php
                if(isset($_POST["layout"])){
                    switch($_POST["layout"]){
                        case 'cargo': 
                            include('cargo.html.php');
                            break;
                        case 'product': 
                            include('product.html.php');
                            break;
                        default: 
                    }
                }else{
                    include('cargo.html.php');
                }
               ?>
            </div>
    </main>
        <section class="bg-gray-100 mx-4 py-20">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6 text-[#234664]">Nos Fonctionnalités</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature bg-white p-6 rounded-lg shadow-lg">
                        <i class="fas fa-shield-alt fa-3x text-[#3b85b2] mb-4"></i>
                        <h3 class="text-xl font-bold mb-2 text-[ ]">Sécurité</h3>
                        <p class="text-gray-700">Protection de vos données assurée.</p>
                    </div>
                    <div class="feature bg-white p-6 rounded-lg shadow-lg">
                        <i class="fas fa-truck fa-3x text-[#3b85b2] mb-4"></i>
                        <h3 class="text-xl font-bold mb-2 text-[#234664]">Livraison Rapide</h3>
                        <p class="text-gray-700">Livraison rapide et fiable.</p>
                    </div>
                    <div class="feature bg-white p-6 rounded-lg shadow-lg">
                        <i class="fas fa-thumbs-up fa-3x text-[#3b85b2] mb-4"></i>
                        <h3 class="text-xl font-bold mb-2 text-[#234664]">Satisfaction Garantie</h3>
                        <p class="text-gray-700">Satisfaction garantie à 100%.</p>
                    </div> 
                </div>
            </div>
        </section>
        <footer class="bg-[#234664] p-4 text-center text-white">
            <div class="container mx-auto">
                <p>© 2024 Sohn's Cargos.</p>
                <div class="mt-4 space-x-4">
                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </footer>
    </div>
<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        <h3 class="font-bold text-lg absolute bg-[#2596be] w-[20px] inline-block  px-4 py-2 text-center rounded-lg mb-6 text-white">Créer une Cargaison</h3>
        <div class="flex flex-col mb-4">
          <label class="mb-1" for="voie">Passerelle</label>
          <select name="voie" class="select select-bordered w-full max-w-xs">
            <option disabled selected>Voie</option>
            <option>Maritime</option>
            <option>Terrestre</option>
            <option>Aérienne</option>
          </select>
        </div>
        <div class="flex flex-col mb-4">
          <label class="mb-1" for="limite">Limite</label>
          <select name="limite" id="limite" class="select select-bordered w-full max-w-xs">
            <option disabled selected>Limite de capacité</option>
            <option>Nombre de places max</option>
            <option>Poids max</option>
          </select>
        </div>
        <div id="nbp_section" class="hidden flex flex-col mb-4">
          <label class="mb-1" for="nbp">Nombre de places</label>
          <input type="number" id="nbp" placeholder="" class="input input-bordered w-full max-w-xs" />
        </div>
        <div id="pds_section" class="hidden flex flex-col mb-4">
          <label class="mb-1" for="pds">Poids max</label>
          <input type="number" id="pds" placeholder="Kg" class="input input-bordered w-full max-w-xs" />
        </div>
        <div class="flex flex-col mb-4">
          <label class="mb-1" for="dist">Distance</label>
          <input type="text" id="dist" placeholder="Km" class="input input-bordered mb-3 w-full max-w-xs" />
          <button type="button" class="btn inline-block bg-slate-300">Carte</button>
        </div>
        <button type="submit" class="btn bg-[#2596be] text-white">Enregistrer</button>
      </form>
    </div>
  </dialog>
  <!-- Open the modal using ID.showModal() method -->
  <button class="btn absolute hidden top-0" onclick="my_modal_1.showModal()">Ouvrir le modal</button>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Ajouter un produit</h3>
    <div class="py-4">
      <form  id="product_form">
        <div class="mb-4">
          <label for="type_produit" class="block text-gray-700 text-sm font-bold mb-2">Type de produit</label>
          <select id="type_produit" name="type_produit"
            class="w-full bg-white border border-gray-300 rounded px-3 py-2 outline-none focus:shadow-outline">
            <option disabled selected>Type de produit</option>
            <option value="alimentaire">Alimentaire</option>
            <option value="chimique">Chimique</option>
            <option value="incassable">Incassable</option>
            <option value="fragile">Fragile</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="libelle_produit" class="block text-gray-700 text-sm font-bold mb-2">Libellé du produit</label>
          <input id="libelle_produit" type="text"
            class="w-full bg-white border border-gray-300 rounded px-3 py-2 outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="numero_destinataire" class="block text-gray-700 text-sm font-bold mb-2">Numéro du destinataire</label>
          <input id="numero_destinataire" type="text"
            class="w-full bg-white border border-gray-300 rounded px-3 py-2 outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="nom_destinataire" class="block text-gray-700 text-sm font-bold mb-2">Nom du destinataire</label>
          <input id="nom_destinataire" type="text"
            class="w-full bg-white border border-gray-300 rounded px-3 py-2 outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="poids_produit" class="block text-gray-700 text-sm font-bold mb-2">Poids du produit (en kg)</label>
          <input id="poids_produit" type="number"
            class="w-full bg-white border border-gray-300 rounded px-3 py-2 outline-none focus:shadow-outline">
        </div>
        <div class="flex justify-end">
          <button class="btn" onclick="my_modal_1.close()">Fermer</button>
          <button id="addprodt" type="submit" class="button btn btn-primary">Ajouter</button>
        </div>
      </form>
    </div>
  </div>
</dialog>
