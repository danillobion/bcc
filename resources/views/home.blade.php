@extends('layouts.app')

@section('content')
 <!-- conteudo -->
 <div class="container" style="margin-top: 2rem;">
    <div class="row ">
        <div class="container_destaque">
            <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700;margin-left: 9px;">DESTAQUES</div>

            <div class="form-row">
                <div class="style_card_destaque_principal">
                    <div class="" style="margin: 5px;">
                        <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 25px;">
                                <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                            <div class="container" style="padding-top: 10px;;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12" style="margin-top:10px;margin-bottom: 10px;">
                                                <span style="background-color: #FF0000; padding: 2px;padding-bottom: 5px; padding-left: 10px; padding-right: 11px; border-radius: 12px; color: #fFF;font-weight: 600;box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                -webkit-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                -moz-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);">Evento</span>
                                            </div>
                                            <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                                Curso Online - Programação Web
                                            </div>
                                            <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                                typesetting industry. Lorem Ipsum has been the industry's 
                                                standard dummy text ever since the 1500s...
                                            </div>
                                            <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">
                                                <img src="img/icone_calendario.png" alt="" width="17px" style="margin-top: -4px; margin-right: 3px;">
                                                <span>10/04/2021 - 10h00</span>
                                            </div>
                                            <div class="col-md-12"><hr style="margin-top: -6px; margin-bottom: -6px;"></div>
                                            <div class="col-md-12">Imagem/Nome do professor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_destaque_principal">
                    <div class="" style="margin: 5px;">
                        <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 25px;">
                                <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                            <div class="container" style="padding-top: 10px;;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12" style="margin-top:10px;margin-bottom: 10px;">
                                                <span style="background-color: #FF0000; padding: 2px;padding-bottom: 5px; padding-left: 10px; padding-right: 11px; border-radius: 12px; color: #fFF;font-weight: 600;box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                -webkit-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);
                                                -moz-box-shadow: 1px 4px 5px -2px rgba(0,0,0,0.22);">Evento</span>
                                            </div>
                                            <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                                Curso Online - Programação Web
                                            </div>
                                            <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                                typesetting industry. Lorem Ipsum has been the industry's 
                                                standard dummy text ever since the 1500s...
                                            </div>
                                            <div class="col-md-12" style="font-size: 15px;line-height: 19px;color: #707070; margin-bottom: 10px;">
                                                <img src="img/icone_calendario.png" alt="" width="17px" style="margin-top: -4px; margin-right: 3px;">
                                                <span>10/04/2021 - 10h00</span>
                                            </div>
                                            <div class="col-md-12"><hr style="margin-top: -6px; margin-bottom: -6px;"></div>
                                            <div class="col-md-12">Imagem/Nome do professor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_importante" >
            <div class="form-group">
                <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">IMPORTANTES</div>
            </div>
            <div class="row">

                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                            <div style=" width: 55px;height: 60px; text-align: center;padding-top: 10px;padding-left: 15px;margin-right: 10px; font-size: 40px;color: #707070;">1º</div>
                            <div class="form-group" style="margin-top: 10px;">
                                <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                            <div style=" width: 55px;height: 60px; text-align: center;padding-top: 10px;padding-left: 15px;margin-right: 10px; font-size: 40px;color: #707070;">2º</div>
                            <div class="form-group" style="margin-top: 10px;">
                                <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                            <div style=" width: 55px;height: 60px; text-align: center;padding-top: 10px;padding-left: 15px;margin-right: 10px; font-size: 40px;color: #707070;">3º</div>
                            <div class="form-group" style="margin-top: 10px;">
                                <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                            <div style=" width: 55px;height: 60px; text-align: center;padding-top: 10px;padding-left: 15px;margin-right: 10px; font-size: 40px;color: #707070;">4º</div>
                            <div class="form-group" style="margin-top: 10px;">
                                <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <div class="btn-group" style="background-color:#F9F9F9;width: 100%;border-radius: 12px;">
                            <div style=" width: 55px;height: 60px; text-align: center;padding-top: 10px;padding-left: 15px;margin-right: 10px; font-size: 40px;color: #707070;">5º</div>
                            <div class="form-group" style="margin-top: 10px;">
                                <div style="font-weight: 600; color: #1492E6;">Notícia</div>
                                <div style="font-size: 12px;width: 95%;color: #707070;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!-- Outros destaques-->
    <div class="row">
        <div class="container_outros_destaques">
            <div class="form-row">
                <div class="col-md-12" style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">OUTROS DESTAQUES</div>
                
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_card_outros_destaque">
                    <div class="" style="background-color: #F6F6F6;border-radius: 12px; padding-bottom: 10px;">
                            <img class="card-img-top" src="imagens/img_default_1.png" alt="Card image cap" style=" border-top-left-radius: 12px;border-top-right-radius: 12px;"> 
                        <div class="container" style="padding-top: 10px;;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top:5px;margin-bottom: 5px;">
                                            <span>Evento</span>
                                        </div>
                                        <div class="col-md-12" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; font-weight: 500; line-height: 19px;color:black; margin-top: 10px; margin-bottom: 10px;">
                                            Curso Online - Programação Web
                                        </div>
                                        <div class="col-md-12" style="font-size: 14px;line-height: 17px;color: #707070; margin-bottom: 10px;">Lorem Ipsum is simply dummy text of the printing and 
                                            typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s...
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
        <div class="container_videos">
            <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">VIDEOS</div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_2.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem Ipsum is simply dummy texLorem Ipsum is simply dasd ...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_2.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem Ipsum is simply dummy texLorem Ipsum is simply dasd ...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_2.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem Ipsum is simply dummy texLorem Ipsum is simply dasd ...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_2.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem Ipsum is simply dummy texLorem Ipsum is simply dasd ...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_2.png" alt="Card image cap" style=" border-radius: 12px; width: 87px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem Ipsum is simply dummy texLorem Ipsum is simply dasd ...</div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">LABORATÓRIOS</div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_3.png" alt="Card image cap" style=" border-radius: 12px; width: 90px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;">BCC COWORKING</div>
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem  </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_3.png" alt="Card image cap" style=" border-radius: 12px; width: 90px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;">LMTS</div>
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem  </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    <div class="btn-group" style="border-color: #E9E9E9;border: solid 1px #E9E9E9; width: 100%;border-radius: 12px;">
                        <div style=" margin-right: 10px;">
                            <img class="card-img-top" src="imagens/img_default_3.png" alt="Card image cap" style=" border-radius: 12px; width: 90px;"> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <div style="font-size: 14px;color: black;font-weight: 600; margin-top: -2px;">ABC</div>
                            <div style="font-size: 12px;width: 95%;height: 100%; color: #707070;">Lorem Ipsum is simply Lorem Ipsum is simply dummy texLorem  </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</div>
@endsection
