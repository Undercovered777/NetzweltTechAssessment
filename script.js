showAll.addEventListener('click',function(){
	allTerritories();
})
function allTerritories(){
	var xmlhttp = new XMLHttpRequest();
	var url = "https://netzwelt-devtest.azurewebsites.net/territories/all";

	xmlhttp.open('GET', url, true);
	xmlhttp.onload = function(){
		if(this.readyState == 4 && this.status == 200){
			allData = JSON.parse(this.responseText);
		}
		dataStore = "";
		for(single in allData.data){
			dataStore += 
			`<div class="col-3">
			<div class="card text-white bg-primary mb-3">
				<div class="card-body">
					<p>${allData.data[single].name}</p>
					<span>${allData.data[single].parent}</span>
				</div>
			</div>
			</div>`

		}
		allList.innerHTML = dataStore;
		console.log(allData);
	} 
	xmlhttp.send();
}
