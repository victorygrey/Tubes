<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Color theme for statusbar (Android only) -->
  <meta name="theme-color" content="#2196f3" />
  <!-- Your app title -->
  <title>My App</title>
  <!-- Path to Framework7 Library Bundle CSS -->
  <link rel="stylesheet" href="../../node_modules/framework7/framework7-bundle.min.css" />
  <!-- Path to your custom app styles-->
  <link rel="stylesheet" href="../../my-app.css" />
</head>

<body>
  <!-- App root element -->
  <div id="app">
    <!-- Your main view, should have "view-main" class -->
    <div class="view view-main">
      <!-- Initial Page, "data-name" contains page name -->
      <div data-name="home" class="page">
        <!-- Top Navbar -->
        <div class="navbar">
          <div class="navbar-bg"></div>
          <div class="navbar-inner">
            <div class="title">Awesome App</div>
          </div>
        </div>

        <!-- Bottom Toolbar -->
        <div class="toolbar toolbar-bottom">
          <div class="toolbar-inner">
            <!-- Toolbar links -->
            <a href="#" class="link">Link 1</a>
            <a href="#" class="link">Link 2</a>
          </div>
        </div>

        <!-- Scrollable page content -->
        <div class="page-content">
          <h2>Dashboard Kasir</h2>
          <div class="searchbar-backdrop"></div>
          <form class="searchbar">
            <div class="searchbar-inner">
              <div class="searchbar-input-wrap">
                <input type="search" placeholder="Search" />
                <i class="searchbar-icon"></i>
                <span class="input-clear-button"></span>
              </div>
              <span class="searchbar-disable-button">Cancel</span>
            </div>
          </form>
          <form name="form_pemesanan" action="#">
            <div class="card data-table">
              <table>
                <tr>
                  <th class="numeric-cell" width="20px">No</th>
                  <th class="label-cell" width="200px">Makanan/Minuman</th>
                  <th class="numeric-cell" width="100px">Harga</th>
                  <th class="numeric-cell" width="100px">Pesan</th>
                </tr>
                <tr>
                  <td class="numeric-cell">1</td>
                  <td></td>
                  <td class="numeric-cell">
                    <div class="list list-strong-ios list-dividers-ios inset-ios">
                      <ul>
                        <li class="item-content item-input">
                          <div class="item-inner">
                            <div class="item-input-with-value item-input-wrap">
                              <div class="input-icon">
                                <i>Rp. </i>
                                <input class="right-curency" type="number" name="" value="" placeholder="" size="6"
                                  readonly="true" />
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td class="numeric-cell">
                    <div class="list list-strong-ios list-dividers-ios inset-ios">
                      <ul>
                        <li class="item-content item-input">
                          <div class="item-inner">
                            <div class="item-input-with-value item-input-wrap">
                              <input type="number" name="harga" value="0" />
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="label-cell" colspan="3" align="right">
                    Jumlah Total
                  </td>
                  <td class="numeric-cell">
                    <input type="text" name="Total" readonly="true" />
                  </td>
                </tr>

                <tr>
                  <td colspan="3" align="right">Diskon</td>
                  <td>
                    <input type="text" name="Diskon" readonly="true" />
                  </td>
                </tr>

                <tr>
                  <td colspan="3" align="right">Jumlah Dibayar</td>
                  <td>
                    <input type="text" name="Bayar" readonly="true" align="right" />
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <input type="submit" value="Bayar" />
          </form>

          <!-- menggunakan framework7 -->
          <!-- <form action="#">
              <div class="block-title">Within card</div>
              <div class="card data-table">
                <table>
                  <thead>
                    <tr>
                      <th class="numeric-cell">No</th>
                      <th class="label-cell">Makanan/Minuman</th>
                      <th class="numeric-cell">Harga</th>
                      <th class="numeric-cell">Pesan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <div
                        class="list list-strong-ios list-dividers-ios inset-ios"
                      >
                        <td class="numeric-cell">1</td>
                        <td class="label-cell">Bakso Istimewa</td>
                        <td class="">
                          <ul>
                            <li class="item-content item-input">
                              <div class="item-inner">
                                @
                                <div class="item-input-wrap">
                                  <input
                                    type="text"
                                    name="bakso"
                                    value="12000"
                                    size="6"
                                    readonly="true"
                                  />
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                        <td class="numeric-cell">
                          <ul>
                            <li class="item-content item-input">
                              <div class="item-inner">
                                <div class="item-input-wrap">
                                  <input
                                    type="text"
                                    name="harga_Bakso"
                                    value="0"
                                    onKeyUp="hitungPesan()"
                                  />
                                  <span class="input-clear-button"></span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </td>
                      </div>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
            </form> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Path to Framework7 Library Bundle JS-->
  <script type="text/javascript" src="../../node_modules/framework7/framework7-bundle.min.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="../../my-app.js"></script>
</body>

</html>