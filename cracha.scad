//preview[view:north,tilt:top]
/////////////////////////////////////////////////////////////////////
/////////          *Customizer variables*          //////////////////
/////////////////////////////////////////////////////////////////////

/* [Configuracoes] */
//escrito no cracha
nome="gabriel";
//em milimetros
tamanho_da_fonte=10;
//espaçamento das letras
spacing = 1.05;
//direita e esquerda
centro_x = true;
nome_x=7;
//sobe e desce
nome_y=18;
// altura vao no cabo do guarda-chuva
altura_do_vao_do_cabo=12;
// posicao do vao
vao_do_cabo_y=17;

/////////////////////////////////////////////////////////////////////

difference() {
	import("base.stl");
	translate([26,vao_do_cabo_y,1]) cube([4,altura_do_vao_do_cabo,1]);
}
scale_factor = tamanho_da_fonte/1.08;

if(centro_x){
translate([28,nome_y,1]) linear_extrude(height = 1) text(nome, font = "Garoa Hacker Clube",size = scale_factor,halign = "center",spacing = spacing);}
else{translate([nome_x,nome_y,1]) linear_extrude(height = 1) text(nome, font = "Garoa Hacker Clube",size = scale_factor);}
