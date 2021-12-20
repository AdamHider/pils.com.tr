<div class="modal cart-window fade " id="cart" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-dialog modal-xl cart-dialog">
          <div class="modal-content">
            <button type="button" class="close-custom" data-dismiss="modal" aria-label="Close">+</button>
            <div class="step active">
              <div class="modal-header">
                <h2 class="modal-title">cart</h2>
              </div>
              
              <div class="modal-footer">
                <div class="items-conteiner">
                  <div class="summ">
                    <div class="code">
                      <label>kod promocyjny</label>
                      <input type="text" placeholder="enter code">
                    </div>
                  </div>
                  <div class="total">
                    <?php foreach ($totals as $total) { ?>
                    <?php echo $total['title']; ?>: <?php echo $total['text']; ?>
                    <?php } ?>
                  </div>

                </div>
                <div class="bc-m">
                  <button class="prev" id="prev" data-num="2">nazad</button>
                  <button class="next" id="next" data-num="2">dalej</button>

                </div>
              </div>
            </div>
            <div class="step" id="step-2">
              <div class="modal-header">
                <h2 class="modal-title">Informaje Kontaktove</h2>
              </div>
              <div class="modal-body">
                <div class="items-conteiner">
                  <form class="client-info" action="#" method="post">
                    <div class="input-container">
                      <div class="input-item">
                        <label>Imie*</label>
                        <input class="i-info" placeholder="name" required>
                      </div>
                      <div class="input-item right">
                        <label>Nazwisko</label>
                        <input class="i-info" placeholder="Last neme" required>
                      </div>
                    </div>
                    <div class="input-container">
                      <div class="input-item">
                        <label>Telefon*</label>
                        <input class="i-info" placeholder="Phone" required>
                      </div>
                      <div class="input-item right">
                        <label>Email*</label>
                        <input class="i-info" placeholder="email" required>
                      </div>
                    </div>
                    <div class="input-container d-block">
                      <div class="input-container">
                        <div class="input-item colum">
                          <label>Sposob dostarcsznia*</label>
                          <div class="radio">
                            <input class="custom-radio" type="radio" id="color-1" name="color"
                                   value="indigo">
                            <label for="color-1">Dostawa</label>
                          </div>

                          <div class="radio">
                            <input class="custom-radio" type="radio" id="color-2" name="color"
                                   value="red">
                            <label for="color-2">Odbior</label>
                          </div>

                        </div>
                      </div>
                      <div class="input-item right address">
                        <label>Addres</label>
                        <input class="i-info" placeholder="addres" required>
                      </div>
                    </div>
                    <div class="input-container tr">
                      <div class="input-container">
                        <div class="input-item colum">
                          <label>Termin realzacji*</label>
                          <div class="radio">
                            <input class="custom-radio" type="radio" id="time-1" name="time"
                                   value="indigo">
                            <label for="time-1">Jak najszybciej</label>
                          </div>

                          <div class="radio">
                            <input class="custom-radio" type="radio" id="termin" name="time"
                                   value="red">
                            <label for="termin">Wybierz termin</label>
                          </div>
                        </div>
                      </div>
                      <div class="input-item right dz">
                        <div class="right-radio">
                          <label>Dzilnica</label>
                          <div class="radios">
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-1"
                                     name="dzielnica"
                                     value="dzilnica-1">
                              <label for="dzilnica-1">URSYNÓW, MOKOTÓW – ZA DARMO</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-2"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-2">ŚRÓDMIEŚCIE, OCHOTA – 5 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-3"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-3">WŁOCHY, WILANÓW – 6 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-4"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-4">PRAGA POŁUDNIE, WOLA – 8 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-5"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-5">BEMOWO, REMBERTÓW – 10 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-6"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-6">BIELANY, TARGÓWEK, URSUS – 12 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-7"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-7">BIAŁOŁĘKA – 16 ZŁ</label>
                            </div>
                            <div class="radio">
                              <input class="custom-radio" type="radio" id="dzilnica-8"
                                     name="dzielnica"
                                     value="red">
                              <label for="dzilnica-8">WESOŁA, ZĄBKI – 20 ZŁ</label>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="selects" id="select">
                      <div class="select" id="selected">
                        <input class="select__input" type="hidden" name="">
                        <div class="select__head">Dzisiaj</div>
                        <ul class="select__list" style="display: none;">
                          <li class="select__item first"><span>Dzisiaj<span></li>
                          <li class="select__item last"><span>Jutro</span></li>
                        </ul>
                      </div>
                      <div class="select">
                        <input class="select__input" type="hidden" name="">
                        <div class="select__head">17:00</div>
                        <ul class="select__list" style="display: none;">
                          <li class="select__item first"><span>17:00</span></li>
                          <li class="select__item"><span>17:30</span></li>
                          <li class="select__item"><span>18:30</span></li>
                          <li class="select__item"><span>19:00</span></li>
                          <li class="select__item"><span>19:30</span></li>
                          <li class="select__item"><span>20:00</span></li>
                          <li class="select__item"><span>20:30</span></li>
                          <li class="select__item"><span>21:00</span></li>
                          <li class="select__item"><span>21:30</span></li>
                          <li class="select__item"><span>22:00</span></li>
                          <li class="select__item"><span>22:30</span></li>
                          <li class="select__item"><span>23:00</span></li>
                          <li class="select__item"><span>23:30</span></li>
                          <li class="select__item"><span>00:00</span></li>
                          <li class="select__item last"><span>01:00</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="input-container">
                      <div class="input-item os">
                        <label>Dla ilu osob *</label>
                        <input class="i-info" placeholder="how mutch" required>
                      </div>
                    </div>
                    <div class="input-container">
                      <div class="input-item w-100">
                        <label>Komentasz</label>
                        <textarea class="i-info" placeholder="enter text"></textarea>
                      </div>
                    </div>
                  </form>
                  <div class="bc-m">
                  <button class="prev" id="prev" data-num="3">nazad</button>
                    <button class="next" id="next" data-num="3">dalej</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="step" id="step-3">
              <div class="modal-header">
                <h2 class="modal-title">Platnosc</h2>
              </div>
              <div class="modal-body">
                <div class="items-conteiner pay">
                  <h4 class="title">Sposob platnosci</h4>
                  <div class="pay-tru">
                    <div class="row">
                      <div class="col-lg-6">
                        <div id="pay" class="pay-buttons">
                          <button class="pay-btn active">Karta</button>
                          <button class="pay-btn" id="got">Gotowka</button>
                        </div>
                      </div>
                      <div class="col-lg-6 tablet">
                        <div class="input-item how_m">
                          <label>Wpisz nominant*</label>
                          <input class="i-info" placeholder="name" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="items-conteiner">
                  <div class="total pay-footer">
                    <p>Kwota: 155zl</p>
                    <p>Dostava: 10zl</p>
                    <p>Rabat: 15zl</p>

                  </div>
                </div>
                <div class="items-conteiner d-block">
                  <p class="total-summ">total: 180zl</p>
                </div>
                <div class="bc-m">
                  <button class="next" id="next" data-num="4">zamow</button>
                </div>
              </div>
            </div>
            <div class="step order" id="step-4">
              <div class="modal-header">
                <h2 class="modal-title">DZIĘKUJEMY ZA ZAMÓWIENIE</h2>
              </div>
              <div class="modal-body">
                <div class="order-time">Zamówienie przyjęta! Czas oczekiwania do 1:30 godzinę.
                  Potwierdzenie wysłane na email.</div>
                <div class="items-conteiner">
                  <img class="img-fluid" src="/catalog/view/theme/kstore/asset/images/last.png">


                </div>
              </div>
              <div class="modal-footer">
                <div class="bc-m">
                  <button class="next" id="next" data-num="4" data-dismiss="modal">Zamow</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>