<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link rel="shortcut icon" href="<?php echo base_url('assets/template/home/dist') ?>/img/logo_cihami.png">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins') ?>/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template/home/dist') ?>/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet"
        href="<?php echo base_url('assets/plugins') ?>/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/summernote/summernote-bs4.min.css">

    <!-- coba css
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js"> -->


    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script nonce="d48048a9-027c-4c99-afcf-07497a826427">
        (function (w, d) {
            ! function (bt, bu, bv, bw) {
                bt[bv] = bt[bv] || {};
                bt[bv].executed = [];
                bt.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bt.zaraz.q = [];
                bt.zaraz._f = function (bx) {
                    return function () {
                        var by = Array.prototype.slice.call(arguments);
                        bt.zaraz.q.push({
                            m: bx,
                            a: by
                        })
                    }
                };
                for (const bz of ["track", "set", "debug"]) bt.zaraz[bz] = bt.zaraz._f(bz);
                bt.zaraz.init = () => {
                    var bA = bu.getElementsByTagName(bw)[0],
                        bB = bu.createElement(bw),
                        bC = bu.getElementsByTagName("title")[0];
                    bC && (bt[bv].t = bu.getElementsByTagName("title")[0].text);
                    bt[bv].x = Math.random();
                    bt[bv].w = bt.screen.width;
                    bt[bv].h = bt.screen.height;
                    bt[bv].j = bt.innerHeight;
                    bt[bv].e = bt.innerWidth;
                    bt[bv].l = bt.location.href;
                    bt[bv].r = bu.referrer;
                    bt[bv].k = bt.screen.colorDepth;
                    bt[bv].n = bu.characterSet;
                    bt[bv].o = (new Date).getTimezoneOffset();
                    if (bt.dataLayer)
                        for (const bG of Object.entries(Object.entries(dataLayer).reduce(((bH, bI) => ({
                            ...bH[1],
                            ...bI[1]
                        })), {}))) zaraz.set(bG[0], bG[1], {
                            scope: "page"
                        });
                    bt[bv].q = [];
                    for (; bt.zaraz.q.length;) {
                        const bJ = bt.zaraz.q.shift();
                        bt[bv].q.push(bJ)
                    }
                    bB.defer = !0;
                    for (const bK of [localStorage, sessionStorage]) Object.keys(bK || {}).filter((bM => bM.startsWith("_zaraz_"))).forEach((bL => {
                        try {
                            bt[bv]["z_" + bL.slice(7)] = JSON.parse(bK.getItem(bL))
                        } catch {
                            bt[bv]["z_" + bL.slice(7)] = bK.getItem(bL)
                        }
                    }));
                    bB.referrerPolicy = "origin";
                    bB.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bt[bv])));
                    bA.parentNode.insertBefore(bB, bA)
                };
                ["complete", "interactive"].includes(bu.readyState) ? zaraz.init() : bt.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">