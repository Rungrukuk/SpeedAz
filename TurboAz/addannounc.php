<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turbo.az</title>
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/announc.css" />
  </head>
  <body>
    <!--Header-->
    <header style="margin-top: 0%">
      <div class="row cont">
        <div
          class="col-3 red-bck mt-2 mr-5 d-flex justify-content-center align-items-center flex-column"
        >
          <img style="width: 50%" src="images/turboaz.png" alt="" />
        </div>
        <div class="col-9 mt-2">
          <div class="row" style="height: 100%">
            <div
              class="col-12 d-flex justify-content-between align-items-center"
            >
              <div>
                <p style="font-size: 15px; color: #c4c4c4">
                  Dəstək xidməti: (012) 599-08-01; (012) 505-77-55
                </p>
              </div>
              <div style="height: 100%; display: flex; gap: 30px">
                <span>по-русски</span>
                <a style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#bookmarks--heart-white"
                    alt=""
                  />
                  <span>Seçilmişlər</span>
                </a>
                <a style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#icon-user"
                    alt=""
                  />
                  <span>Giriş</span>
                </a>
              </div>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">BINA.AZ</h1>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">TAP.AZ</h1>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">BOSS.AZ</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--Elan Yerlesdir-->
    <div class="add-announcement red-bck">
      <div
        class="d-flex justify-content-between align-items-center cont"
        style="height: 60px"
      >
        <div
          class="d-flex justify-content-center gap-4 links"
          style="margin-left: 15px"
        >
          <a href="index.php">Bütün elanlar</a>
          <a href="">Avtosalonlar</a>
          <a href="">Ehtiyat hissələri və aksesuarlar</a>
        </div>
        </div>
      </div>
    </div>
    <!--Main Content-->
    <h1
      class="cont mt-2 mb-2 py-4"
      style="
        font-size: 18px;
        font-weight: 700;
        border-bottom: 1px solid #efefef;
      "
    >
      ELAN YERLƏŞDİRMƏK
    </h1>
    <ul class="cont info-list">
      <li>
        Üç ay ərzində bir nəqliyyat vasitəsi yalnız bir dəfə pulsuz dərc oluna
        bilər.
      </li>
      <li>
        Üç ay ərzində təkrar və ya oxşar elanlar (marka/model, rəng)
        ödənişlidir.
      </li>
      <li>
        Elanınızı saytın ön sıralarında görmək üçün "İrəli çək" xidmətindən
        istifadə edin.
      </li>
    </ul>
    <!--Form-->
    <form action="" class="cont">
      <div class="form-elements">
        <label for="">Marka</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <select name="" id="">
          <option value="">Secin</option>
          <option value="">BMW</option>
          <option value="">Mercedes</option>
          <option value="">KIA</option>
          <option value="">Hundai</option>
        </select>
        <label for="">Yanacaq növü </label>
        <select name="" id="">
          <option value="">Benzin</option>
          <option value="">Dizel</option>
          <option value="">Qaz</option>
          <option value="">Elekt.</option>
          <option value="">Hibrid</option>
        </select>
      </div>
      <div class="form-elements">
        <label for="">Model</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <select name="" id="">
          <option value="">Secin</option>
          <option value="">BMW</option>
          <option value="">Mercedes</option>
          <option value="">KIA</option>
          <option value="">Hundai</option>
        </select>
        <label for="">Ötürücü </label>
        <select name="" id="">
          <option value="">Arxa</option>
          <option value="">On</option>
          <option value="">Tam</option>
        </select>
      </div>
      <div class="form-elements">
        <label for="">Ban Novu</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <select name="" id="">
          <option value="">Secin</option>
          <option value="">Avtobus</option>
          <option value="">Furqon</option>
          <option value="">Pikap</option>
          <option value="">Kupe</option>
        </select>
        <label for="">Sürətlər qutusu</label>
        <select name="" id="">
          <option value="">Mexaniki</option>
          <option value="">Avtomat</option>
          <option value="">Variator</option>
        </select>
      </div>
      <div class="form-elements">
        <label for="">Yürüş</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <div style="display: inline">
          <input
            type="number"
            step="1000"
            min="0"
            max=""
            style="width: 90px; border: 1px solid gray; border-radius: 4px"
          />
          <input type="checkbox" name="distance" />
          <label for="km">km</label>
          <input type="checkbox" name="distance" />
          <label for="mil">mil</label>
        </div>
        <label for="">Buraxılış ili </label>
        <select name="" id="">
          <option value="">2022</option>
          <option value="">2021</option>
          <option value="">2020</option>
        </select>
      </div>
      <div class="form-elements">
        <label for="">Rəng </label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <select name="" id="">
          <option value=""></option>
          <option value="">Qara</option>
          <option value="">Qirmizi</option>
          <option value="">Goy</option>
          <option value="">Ag</option>
        </select>
        <label for="">Mühərrikin həcmi, sm3</label>
        <select name="" id="">
          <option value="">50</option>
          <option value="">100</option>
          <option value="">150</option>
        </select>
      </div>
      <div class="form-elements">
        <label for="">Qiymət</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <div>
          <input
            type="number"
            step="1"
            min="500"
            max=""
            style="width: 90px; border: 1px solid gray; border-radius: 4px"
          />
          <input type="checkbox" name="distance" />
          <label for="km">USD</label>
          <input type="checkbox" name="distance" />
          <label for="mil">AZN</label>
          <input type="checkbox" name="distance" />
          <label for="mil">EURO</label>
        </div>
        <label for="">Mühərrikin gücü, a.g </label>
        <input
          type="number"
          step="1"
          min="1"
          max=""
          style="width: 80%;height: 30px; border: 1px solid gray; border-radius: 4px"
        />
      </div>
      <div style="margin: 20px 0px;">
        <input type="checkbox" name="distance" />
        <label for="mil">Kreditdedir</label>
        <input type="checkbox" name="distance" />
        <label for="mil">Barter Mumkundur</label>
      </div>

      <div
        style="display: grid; grid-template-columns: 1fr 4fr; margin: 10px 0px"
      >
        <label for="">Elave Melumat</label>
        <textarea name="" id="" cols="89" rows="4"></textarea>
      </div>
      <h2>Sekiller</h2>
      <section class="add-img">
        <ul>
          <li>
            Minimum – 3 şəkil (ön, arxa və bütöv ön panelin görüntüsü
            mütləqdir).
          </li>
          <li>Maksimum – 21 şəkil.</li>
          <li>Optimal ölçü – 1024x768 piksel.</li>
        </ul>
        <div class="images">
          <img
            src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#front"
            alt=""
          />
          <img
            src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#back"
            alt=""
          />
          <img
            src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#dashboard"
            alt=""
          />
          <img
            id="add-icon"
            src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#plus"
            alt=""
          />
        </div>
      </section>
      <ul class="rules">
        <div>
          <li>Şəkillər Azərbaycan Respublikasının ərazisində çəkilməlidir.</li>
          <li>
            Şəkillər yaxşı keyfiyyətdə olmalıdır. Nəqliyyat vasitəsi yaxşı
            işıqlandırılmış olmalı, şəkillərin üzərində loqotip və digər yazılar
            olmamalıdır. Skrinşotlar qəbul olunmur.
          </li>
        </div>
        <div>
          <li>
            Avtosalonda çəkilmiş şəkillər qeydiyyatdan keçmiş avtosalonun
            hesabından уerləşdirilməlidir.
          </li>
          <li>
            Şəxsi sahibi tərəfindən satılan nəqliyyat vasitəsinin şəkli
            avtosalon/rəsmi servis ərazisində və ya yaxınlığında çəkilməməlidir.
          </li>
        </div>
      </ul>
      <div class="button"><span>Davam Et</span></div>
      <p>
        Elan yerləşdirərək, siz Turbo.az-ın İstifadəçi razılaşması və Qaydaları
        ilə razı olduğunuzu təsdiq edirsiniz
      </p>
    </form>
    <!--Footer-->
    <footer>
      <div
        class="cont d-flex justify-content-between align-items-center mb-5 mt-5"
      >
        <div style="width: 50%; margin-bottom: 1rem">
          <a href="">İstifadəçi razılaşması</a>
          <a href="">Qaydalar Qanun</a>
          <a href="">Məxfilik siyasəti</a>
        </div>
        <div>
          <p style="color: #979797">
            Saytın Administrasiyası reklam bannerlərinin və yerləşdirilmiş
            elanların məzmununa görə məsuliyyət daşımır. Hər hansı bir məlumatı,
            materialı və fotoşəkili administrasiyanın yazılı icazəsi olmadan
            istifadə etmək qeyri-qanuni hesab ediləcək və Azərbaycan
            Respublikasının Qanunlarına əsasən cəzalandırılacaqdır.
          </p>
        </div>
      </div>
      <div class="cont pb-5">
        <div>
          <p style="color: white">
            2006-2022 Digital Classifieds MMC. VÖEN: 1405631661
          </p>
        </div>
        <div>
          <p style="color: white">(012) 599-08-01; (012) 505-77-55</p>
        </div>
        <div>
          <a href="">turbo@turbo.az</a>
        </div>
        <div>
          <a href="">Mobil versiyası</a>
        </div>
      </div>
    </footer>
  </body>
</html>