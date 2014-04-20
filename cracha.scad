//preview[view:north,tilt:top]
/////////////////////////////////////////////////////////////////////
/////////          *Customizer variables*          //////////////////
/////////////////////////////////////////////////////////////////////

/* [Configuracoes] */
//escrito no cracha
nome="oda";
//em milimetros
tamanho_da_fonte=10;
//direita e esquerda
nome_x=17;
//sobe e desce
nome_y=18;
// altura vao no cabo do guarda-chuva
altura_do_vao_do_cabo=12;
// posicao do vao
vao_do_cabo_y=17;

/////////////////////////////////////////////////////////////////////

include <write.scad>
l=2*1;

difference() {
	import("base.stl");
	translate([26,vao_do_cabo_y,l/2]) cube([4,altura_do_vao_do_cabo,l]);
}
scale_factor=tamanho_da_fonte/9;
translate([nome_x,nome_y,0]) scale([scale_factor,scale_factor,1]) write(nome,l);
