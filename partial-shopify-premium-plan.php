<div id='product-component-891068e58a8'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'exodus-90.myshopify.com',
      apiKey: 'a87514f7e14d35248d5902470e9743f1',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [8549572873],
        node: document.getElementById('product-component-891068e58a8'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    //"width": "100%",
    "contents": {
      "img": false,
      "imgWithCarousel": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "ADD TO CART!"
    },
    "styles": {
      "product": {
        "text-align": "center",
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#222b33",
        "color": "#fdfdfd",
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        "padding-left": "30px",
        "padding-right": "30px",
        ":hover": {
          "background-color": "#000000",
          "color": "#fdfdfd"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "title": {
        "font-size": "26px",
        "color": "#ffffff"
      },
      "price": {
        "font-size": "18px",
        "color": "#ffffff"
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
      },
      "compareAt": {
        "font-size": "15px",
        "color": "#ffffff"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "text": {
      "notice": "IMPORTANT: When checking out, make sure you check “Keep me up to date on news and exclusive offers.” That’s how we deliver your Exodus 90 program!"
    },
    "styles": {
      "button": {
        "background-color": "#000000",
        "color": "#fdfdfd",
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        ":hover": {
          "background-color": "#000000",
          "color": "#fdfdfd"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#000000",
        "color": "#fdfdfd",
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        "padding-left": "30px",
        "padding-right": "30px",
        ":hover": {
          "background-color": "#000000",
          "color": "#fdfdfd"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#000000",
        ":hover": {
          "background-color": "#000000"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "count": {
        "font-size": "18px",
        "color": "#fdfdfd",
        ":hover": {
          "color": "#fdfdfd"
        }
      },
      "iconPath": {
        "fill": "#fdfdfd"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>