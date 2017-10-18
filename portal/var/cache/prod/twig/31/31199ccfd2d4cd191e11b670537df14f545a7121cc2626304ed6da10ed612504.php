<?php

/* :Emails:delete_trip.html.twig */
class __TwigTemplate_35b74dabe58e8233b5b5feb15b170263899d2b2c806104288ff49c072cf97457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title></title>
    <style>
        .wrapper {
            width: 100%; }

        #outlook a {
            padding: 0; }

        body {
            width: 100% !important;
            min-width: 100%;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            Margin: 0;
            padding: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box; }

        .ExternalClass {
            width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%; }

        #backgroundTable {
            margin: 0;
            Margin: 0;
            padding: 0;
            width: 100% !important;
            line-height: 100% !important; }

        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
            width: auto;
            max-width: 100%;
            clear: both;
            display: block; }

        center {
            width: 100%;
            min-width: 580px; }

        a img {
            border: none; }

        p {
            margin: 0 0 0 10px;
            Margin: 0 0 0 10px; }

        table {
            border-spacing: 0;
            border-collapse: collapse; }

        td {
            word-wrap: break-word;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            hyphens: auto;
            border-collapse: collapse !important; }

        table, tr, td {
            padding: 0;
            vertical-align: top;
            text-align: left; }

        @media only screen {
            html {
                min-height: 100%;
                background: #f3f3f3; } }

        table.body {
            background: #ffffff;
            height: 100%;
            width: 100%; }

        table.container {
            background: #fefefe;
            width: 580px;
            margin: 0 auto;
            Margin: 0 auto;
            text-align: inherit;
            border: 1px solid #eee}

        table.row {
            padding: 0;
            width: 100%;
            position: relative; }

        table.spacer {
            width: 100%; }
        table.spacer td {
            mso-line-height-rule: exactly; }

        table.container table.row {
            display: table; }

        td.columns,
        td.column,
        th.columns,
        th.column {
            margin: 0 auto;
            Margin: 0 auto;
            padding-left: 16px;
            padding-bottom: 16px; }
        td.columns .column,
        td.columns .columns,
        td.column .column,
        td.column .columns,
        th.columns .column,
        th.columns .columns,
        th.column .column,
        th.column .columns {
            padding-left: 0 !important;
            padding-right: 0 !important; }
        td.columns .column center,
        td.columns .columns center,
        td.column .column center,
        td.column .columns center,
        th.columns .column center,
        th.columns .columns center,
        th.column .column center,
        th.column .columns center {
            min-width: none !important; }

        td.columns.last,
        td.column.last,
        th.columns.last,
        th.column.last {
            padding-right: 16px; }

        td.columns table:not(.button),
        td.column table:not(.button),
        th.columns table:not(.button),
        th.column table:not(.button) {
            width: 100%; }

        td.large-1,
        th.large-1 {
            width: 32.33333px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-1.first,
        th.large-1.first {
            padding-left: 16px; }

        td.large-1.last,
        th.large-1.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-1,
        .collapse > tbody > tr > th.large-1 {
            padding-right: 0;
            padding-left: 0;
            width: 48.33333px; }

        .collapse td.large-1.first,
        .collapse th.large-1.first,
        .collapse td.large-1.last,
        .collapse th.large-1.last {
            width: 56.33333px; }

        td.large-1 center,
        th.large-1 center {
            min-width: 0.33333px; }

        .body .columns td.large-1,
        .body .column td.large-1,
        .body .columns th.large-1,
        .body .column th.large-1 {
            width: 8.33333%; }

        td.large-2,
        th.large-2 {
            width: 80.66667px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-2.first,
        th.large-2.first {
            padding-left: 16px; }

        td.large-2.last,
        th.large-2.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-2,
        .collapse > tbody > tr > th.large-2 {
            padding-right: 0;
            padding-left: 0;
            width: 96.66667px; }

        .collapse td.large-2.first,
        .collapse th.large-2.first,
        .collapse td.large-2.last,
        .collapse th.large-2.last {
            width: 104.66667px; }

        td.large-2 center,
        th.large-2 center {
            min-width: 48.66667px; }

        .body .columns td.large-2,
        .body .column td.large-2,
        .body .columns th.large-2,
        .body .column th.large-2 {
            width: 16.66667%; }

        td.large-3,
        th.large-3 {
            width: 129px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-3.first,
        th.large-3.first {
            padding-left: 16px; }

        td.large-3.last,
        th.large-3.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-3,
        .collapse > tbody > tr > th.large-3 {
            padding-right: 0;
            padding-left: 0;
            width: 145px; }

        .collapse td.large-3.first,
        .collapse th.large-3.first,
        .collapse td.large-3.last,
        .collapse th.large-3.last {
            width: 153px; }

        td.large-3 center,
        th.large-3 center {
            min-width: 97px; }

        .body .columns td.large-3,
        .body .column td.large-3,
        .body .columns th.large-3,
        .body .column th.large-3 {
            width: 25%; }

        td.large-4,
        th.large-4 {
            width: 177.33333px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-4.first,
        th.large-4.first {
            padding-left: 16px; }

        td.large-4.last,
        th.large-4.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-4,
        .collapse > tbody > tr > th.large-4 {
            padding-right: 0;
            padding-left: 0;
            width: 193.33333px; }

        .collapse td.large-4.first,
        .collapse th.large-4.first,
        .collapse td.large-4.last,
        .collapse th.large-4.last {
            width: 201.33333px; }

        td.large-4 center,
        th.large-4 center {
            min-width: 145.33333px; }

        .body .columns td.large-4,
        .body .column td.large-4,
        .body .columns th.large-4,
        .body .column th.large-4 {
            width: 33.33333%; }

        td.large-5,
        th.large-5 {
            width: 225.66667px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-5.first,
        th.large-5.first {
            padding-left: 16px; }

        td.large-5.last,
        th.large-5.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-5,
        .collapse > tbody > tr > th.large-5 {
            padding-right: 0;
            padding-left: 0;
            width: 241.66667px; }

        .collapse td.large-5.first,
        .collapse th.large-5.first,
        .collapse td.large-5.last,
        .collapse th.large-5.last {
            width: 249.66667px; }

        td.large-5 center,
        th.large-5 center {
            min-width: 193.66667px; }

        .body .columns td.large-5,
        .body .column td.large-5,
        .body .columns th.large-5,
        .body .column th.large-5 {
            width: 41.66667%; }

        td.large-6,
        th.large-6 {
            width: 274px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-6.first,
        th.large-6.first {
            padding-left: 16px; }

        td.large-6.last,
        th.large-6.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-6,
        .collapse > tbody > tr > th.large-6 {
            padding-right: 0;
            padding-left: 0;
            width: 290px; }

        .collapse td.large-6.first,
        .collapse th.large-6.first,
        .collapse td.large-6.last,
        .collapse th.large-6.last {
            width: 298px; }

        td.large-6 center,
        th.large-6 center {
            min-width: 242px; }

        .body .columns td.large-6,
        .body .column td.large-6,
        .body .columns th.large-6,
        .body .column th.large-6 {
            width: 50%; }

        td.large-7,
        th.large-7 {
            width: 322.33333px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-7.first,
        th.large-7.first {
            padding-left: 16px; }

        td.large-7.last,
        th.large-7.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-7,
        .collapse > tbody > tr > th.large-7 {
            padding-right: 0;
            padding-left: 0;
            width: 338.33333px; }

        .collapse td.large-7.first,
        .collapse th.large-7.first,
        .collapse td.large-7.last,
        .collapse th.large-7.last {
            width: 346.33333px; }

        td.large-7 center,
        th.large-7 center {
            min-width: 290.33333px; }

        .body .columns td.large-7,
        .body .column td.large-7,
        .body .columns th.large-7,
        .body .column th.large-7 {
            width: 58.33333%; }

        td.large-8,
        th.large-8 {
            width: 370.66667px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-8.first,
        th.large-8.first {
            padding-left: 16px; }

        td.large-8.last,
        th.large-8.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-8,
        .collapse > tbody > tr > th.large-8 {
            padding-right: 0;
            padding-left: 0;
            width: 386.66667px; }

        .collapse td.large-8.first,
        .collapse th.large-8.first,
        .collapse td.large-8.last,
        .collapse th.large-8.last {
            width: 394.66667px; }

        td.large-8 center,
        th.large-8 center {
            min-width: 338.66667px; }

        .body .columns td.large-8,
        .body .column td.large-8,
        .body .columns th.large-8,
        .body .column th.large-8 {
            width: 66.66667%; }

        td.large-9,
        th.large-9 {
            width: 419px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-9.first,
        th.large-9.first {
            padding-left: 16px; }

        td.large-9.last,
        th.large-9.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-9,
        .collapse > tbody > tr > th.large-9 {
            padding-right: 0;
            padding-left: 0;
            width: 435px; }

        .collapse td.large-9.first,
        .collapse th.large-9.first,
        .collapse td.large-9.last,
        .collapse th.large-9.last {
            width: 443px; }

        td.large-9 center,
        th.large-9 center {
            min-width: 387px; }

        .body .columns td.large-9,
        .body .column td.large-9,
        .body .columns th.large-9,
        .body .column th.large-9 {
            width: 75%; }

        td.large-10,
        th.large-10 {
            width: 467.33333px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-10.first,
        th.large-10.first {
            padding-left: 16px; }

        td.large-10.last,
        th.large-10.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-10,
        .collapse > tbody > tr > th.large-10 {
            padding-right: 0;
            padding-left: 0;
            width: 483.33333px; }

        .collapse td.large-10.first,
        .collapse th.large-10.first,
        .collapse td.large-10.last,
        .collapse th.large-10.last {
            width: 491.33333px; }

        td.large-10 center,
        th.large-10 center {
            min-width: 435.33333px; }

        .body .columns td.large-10,
        .body .column td.large-10,
        .body .columns th.large-10,
        .body .column th.large-10 {
            width: 83.33333%; }

        td.large-11,
        th.large-11 {
            width: 515.66667px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-11.first,
        th.large-11.first {
            padding-left: 16px; }

        td.large-11.last,
        th.large-11.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-11,
        .collapse > tbody > tr > th.large-11 {
            padding-right: 0;
            padding-left: 0;
            width: 531.66667px; }

        .collapse td.large-11.first,
        .collapse th.large-11.first,
        .collapse td.large-11.last,
        .collapse th.large-11.last {
            width: 539.66667px; }

        td.large-11 center,
        th.large-11 center {
            min-width: 483.66667px; }

        .body .columns td.large-11,
        .body .column td.large-11,
        .body .columns th.large-11,
        .body .column th.large-11 {
            width: 91.66667%; }

        td.large-12,
        th.large-12 {
            width: 564px;
            padding-left: 8px;
            padding-right: 8px; }

        td.large-12.first,
        th.large-12.first {
            padding-left: 16px; }

        td.large-12.last,
        th.large-12.last {
            padding-right: 16px; }

        .collapse > tbody > tr > td.large-12,
        .collapse > tbody > tr > th.large-12 {
            padding-right: 0;
            padding-left: 0;
            width: 580px; }

        .collapse td.large-12.first,
        .collapse th.large-12.first,
        .collapse td.large-12.last,
        .collapse th.large-12.last {
            width: 588px; }

        td.large-12 center,
        th.large-12 center {
            min-width: 532px; }

        .body .columns td.large-12,
        .body .column td.large-12,
        .body .columns th.large-12,
        .body .column th.large-12 {
            width: 100%; }

        td.large-offset-1,
        td.large-offset-1.first,
        td.large-offset-1.last,
        th.large-offset-1,
        th.large-offset-1.first,
        th.large-offset-1.last {
            padding-left: 64.33333px; }

        td.large-offset-2,
        td.large-offset-2.first,
        td.large-offset-2.last,
        th.large-offset-2,
        th.large-offset-2.first,
        th.large-offset-2.last {
            padding-left: 112.66667px; }

        td.large-offset-3,
        td.large-offset-3.first,
        td.large-offset-3.last,
        th.large-offset-3,
        th.large-offset-3.first,
        th.large-offset-3.last {
            padding-left: 161px; }

        td.large-offset-4,
        td.large-offset-4.first,
        td.large-offset-4.last,
        th.large-offset-4,
        th.large-offset-4.first,
        th.large-offset-4.last {
            padding-left: 209.33333px; }

        td.large-offset-5,
        td.large-offset-5.first,
        td.large-offset-5.last,
        th.large-offset-5,
        th.large-offset-5.first,
        th.large-offset-5.last {
            padding-left: 257.66667px; }

        td.large-offset-6,
        td.large-offset-6.first,
        td.large-offset-6.last,
        th.large-offset-6,
        th.large-offset-6.first,
        th.large-offset-6.last {
            padding-left: 306px; }

        td.large-offset-7,
        td.large-offset-7.first,
        td.large-offset-7.last,
        th.large-offset-7,
        th.large-offset-7.first,
        th.large-offset-7.last {
            padding-left: 354.33333px; }

        td.large-offset-8,
        td.large-offset-8.first,
        td.large-offset-8.last,
        th.large-offset-8,
        th.large-offset-8.first,
        th.large-offset-8.last {
            padding-left: 402.66667px; }

        td.large-offset-9,
        td.large-offset-9.first,
        td.large-offset-9.last,
        th.large-offset-9,
        th.large-offset-9.first,
        th.large-offset-9.last {
            padding-left: 451px; }

        td.large-offset-10,
        td.large-offset-10.first,
        td.large-offset-10.last,
        th.large-offset-10,
        th.large-offset-10.first,
        th.large-offset-10.last {
            padding-left: 499.33333px; }

        td.large-offset-11,
        td.large-offset-11.first,
        td.large-offset-11.last,
        th.large-offset-11,
        th.large-offset-11.first,
        th.large-offset-11.last {
            padding-left: 547.66667px; }

        td.expander,
        th.expander {
            visibility: hidden;
            width: 0;
            padding: 0 !important; }

        table.container.radius {
            border-radius: 0;
            border-collapse: separate; }

        .block-grid {
            width: 100%;
            max-width: 580px; }
        .block-grid td {
            display: inline-block;
            padding: 8px; }

        .up-2 td {
            width: 274px !important; }

        .up-3 td {
            width: 177px !important; }

        .up-4 td {
            width: 129px !important; }

        .up-5 td {
            width: 100px !important; }

        .up-6 td {
            width: 80px !important; }

        .up-7 td {
            width: 66px !important; }

        .up-8 td {
            width: 56px !important; }

        table.text-center,
        th.text-center,
        td.text-center,
        h1.text-center,
        h2.text-center,
        h3.text-center,
        h4.text-center,
        h5.text-center,
        h6.text-center,
        p.text-center,
        span.text-center {
            text-align: center; }

        table.text-left,
        th.text-left,
        td.text-left,
        h1.text-left,
        h2.text-left,
        h3.text-left,
        h4.text-left,
        h5.text-left,
        h6.text-left,
        p.text-left,
        span.text-left {
            text-align: left; }

        table.text-right,
        th.text-right,
        td.text-right,
        h1.text-right,
        h2.text-right,
        h3.text-right,
        h4.text-right,
        h5.text-right,
        h6.text-right,
        p.text-right,
        span.text-right {
            text-align: right; }

        span.text-center {
            display: block;
            width: 100%;
            text-align: center; }

        @media only screen and (max-width: 596px) {
            .small-float-center {
                margin: 0 auto !important;
                float: none !important;
                text-align: center !important; }
            .small-text-center {
                text-align: center !important; }
            .small-text-left {
                text-align: left !important; }
            .small-text-right {
                text-align: right !important; } }

        img.float-left {
            float: left;
            text-align: left; }

        img.float-right {
            float: right;
            text-align: right; }

        img.float-center,
        img.text-center {
            margin: 0 auto;
            Margin: 0 auto;
            float: none;
            text-align: center; }

        table.float-center,
        td.float-center,
        th.float-center {
            margin: 0 auto;
            Margin: 0 auto;
            float: none;
            text-align: center; }

        .hide-for-large {
            display: none !important;
            mso-hide: all;
            overflow: hidden;
            max-height: 0;
            font-size: 0;
            width: 0;
            line-height: 0; }
        @media only screen and (max-width: 596px) {
            .hide-for-large {
                display: block !important;
                width: auto !important;
                overflow: visible !important;
                max-height: none !important;
                font-size: inherit !important;
                line-height: inherit !important; } }

        table.body table.container .hide-for-large * {
            mso-hide: all; }

        @media only screen and (max-width: 596px) {
            table.body table.container .hide-for-large,
            table.body table.container .row.hide-for-large {
                display: table !important;
                width: 100% !important; } }

        @media only screen and (max-width: 596px) {
            table.body table.container .callout-inner.hide-for-large {
                display: table-cell !important;
                width: 100% !important; } }

        @media only screen and (max-width: 596px) {
            table.body table.container .show-for-large {
                display: none !important;
                width: 0;
                mso-hide: all;
                overflow: hidden; } }

        body,
        table.body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        td,
        th,
        a {
            color: #0a0a0a;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: normal;
            padding: 0;
            margin: 0;
            Margin: 0;
            text-align: left;
            line-height: 1.3; }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: inherit;
            word-wrap: normal;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: normal;
            margin-bottom: 10px;
            Margin-bottom: 10px; }

        h1 {
            font-size: 34px; }

        h2 {
            font-size: 30px; }

        h3 {
            font-size: 28px; }

        h4 {
            font-size: 24px; }

        h5 {
            font-size: 20px; }

        h6 {
            font-size: 18px; }

        body,
        table.body,
        p,
        td,
        th {
            font-size: 14px;
            line-height: 1.3; }

        p {
            margin-bottom: 10px;
            Margin-bottom: 10px; }
        p.lead {
            font-size: 20px;
            line-height: 1.6; }
        p.subheader {
            margin-top: 4px;
            margin-bottom: 8px;
            Margin-top: 4px;
            Margin-bottom: 8px;
            font-weight: normal;
            line-height: 1.4;
            color: #8a8a8a; }

        small {
            font-size: 80%;
            color: #cacaca; }

        a {
            color: #2199e8;
            text-decoration: none; }
        a:hover {
            color: #147dc2; }
        a:active {
            color: #147dc2; }
        a:visited {
            color: #2199e8; }

        h1 a,
        h1 a:visited,
        h2 a,
        h2 a:visited,
        h3 a,
        h3 a:visited,
        h4 a,
        h4 a:visited,
        h5 a,
        h5 a:visited,
        h6 a,
        h6 a:visited {
            color: #2199e8; }

        pre {
            background: #f3f3f3;
            margin: 30px 0;
            Margin: 30px 0; }
        pre code {
            color: #cacaca; }
        pre code span.callout {
            color: #8a8a8a;
            font-weight: bold; }
        pre code span.callout-strong {
            color: #ff6908;
            font-weight: bold; }

        table.hr {
            width: 100%; }
        table.hr th {
            height: 0;
            max-width: 580px;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #0a0a0a;
            border-left: 0;
            margin: 20px auto;
            Margin: 20px auto;
            clear: both; }

        .stat {
            font-size: 40px;
            line-height: 1; }
        p + .stat {
            margin-top: -16px;
            Margin-top: -16px; }

        span.preheader {
            display: none !important;
            visibility: hidden;
            mso-hide: all !important;
            font-size: 1px;
            color: #f3f3f3;
            line-height: 1px;
            max-height: 0px;
            max-width: 0px;
            opacity: 0;
            overflow: hidden; }

        table.button {
            width: auto;
            margin: 0 0 16px 0;
            Margin: 0 0 16px 0; }
        table.button table td {
            text-align: left;
            color: #fefefe;
            background: #2199e8;
            border: 2px solid #2199e8; }
        table.button table td a {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            color: #fefefe;
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px 8px 16px;
            border: 0 solid #2199e8;
            border-radius: 3px; }
        table.button.radius table td {
            border-radius: 3px;
            border: none; }
        table.button.rounded table td {
            border-radius: 500px;
            border: none; }

        table.button:hover table tr td a,
        table.button:active table tr td a,
        table.button table tr td a:visited,
        table.button.tiny:hover table tr td a,
        table.button.tiny:active table tr td a,
        table.button.tiny table tr td a:visited,
        table.button.small:hover table tr td a,
        table.button.small:active table tr td a,
        table.button.small table tr td a:visited,
        table.button.large:hover table tr td a,
        table.button.large:active table tr td a,
        table.button.large table tr td a:visited {
            color: #fefefe; }

        table.button.tiny table td,
        table.button.tiny table a {
            padding: 4px 8px 4px 8px; }

        table.button.tiny table a {
            font-size: 10px;
            font-weight: normal; }

        table.button.small table td,
        table.button.small table a {
            padding: 5px 10px 5px 10px;
            font-size: 12px; }

        table.button.large table a {
            padding: 10px 20px 10px 20px;
            font-size: 20px; }

        table.button.expand,
        table.button.expanded {
            width: 100% !important; }
        table.button.expand table,
        table.button.expanded table {
            width: 100%; }
        table.button.expand table a,
        table.button.expanded table a {
            text-align: center;
            width: 100%;
            padding-left: 0;
            padding-right: 0; }
        table.button.expand center,
        table.button.expanded center {
            min-width: 0; }

        table.button:hover table td,
        table.button:visited table td,
        table.button:active table td {
            background: #147dc2;
            color: #fefefe; }

        table.button:hover table a,
        table.button:visited table a,
        table.button:active table a {
            border: 0 solid #147dc2; }

        table.button.secondary table td {
            background: #777777;
            color: #fefefe;
            border: 0px solid #777777; }

        table.button.secondary table a {
            color: #fefefe;
            border: 0 solid #777777; }

        table.button.secondary:hover table td {
            background: #919191;
            color: #fefefe; }

        table.button.secondary:hover table a {
            border: 0 solid #919191; }

        table.button.secondary:hover table td a {
            color: #fefefe; }

        table.button.secondary:active table td a {
            color: #fefefe; }

        table.button.secondary table td a:visited {
            color: #fefefe; }

        table.button.success table td {
            background: #3adb76;
            border: 0px solid #3adb76; }

        table.button.success table a {
            border: 0 solid #3adb76; }

        table.button.success:hover table td {
            background: #23bf5d; }

        table.button.success:hover table a {
            border: 0 solid #23bf5d; }

        table.button.alert table td {
            background: #ec5840;
            border: 0px solid #ec5840; }

        table.button.alert table a {
            border: 0 solid #ec5840; }

        table.button.alert:hover table td {
            background: #e23317; }

        table.button.alert:hover table a {
            border: 0 solid #e23317; }

        table.button.warning table td {
            background: #ffae00;
            border: 0px solid #ffae00; }

        table.button.warning table a {
            border: 0px solid #ffae00; }

        table.button.warning:hover table td {
            background: #cc8b00; }

        table.button.warning:hover table a {
            border: 0px solid #cc8b00; }

        table.callout {
            margin-bottom: 16px;
            Margin-bottom: 16px; }

        th.callout-inner {
            width: 100%;
            border: 1px solid #cbcbcb;
            padding: 10px;
            background: #fefefe; }
        th.callout-inner.primary {
            background: #def0fc;
            border: 1px solid #444444;
            color: #0a0a0a; }
        th.callout-inner.secondary {
            background: #ebebeb;
            border: 1px solid #444444;
            color: #0a0a0a; }
        th.callout-inner.success {
            background: #e1faea;
            border: 1px solid #1b9448;
            color: #fefefe; }
        th.callout-inner.warning {
            background: #fff3d9;
            border: 1px solid #996800;
            color: #fefefe; }
        th.callout-inner.alert {
            background: #fce6e2;
            border: 1px solid #b42912;
            color: #fefefe; }

        .thumbnail {
            border: solid 4px #fefefe;
            box-shadow: 0 0 0 1px rgba(10, 10, 10, 0.2);
            display: inline-block;
            line-height: 0;
            max-width: 100%;
            transition: box-shadow 200ms ease-out;
            border-radius: 3px;
            margin-bottom: 16px; }
        .thumbnail:hover, .thumbnail:focus {
            box-shadow: 0 0 6px 1px rgba(33, 153, 232, 0.5); }

        table.menu {
            width: 580px; }
        table.menu td.menu-item,
        table.menu th.menu-item {
            padding: 10px;
            padding-right: 10px; }
        table.menu td.menu-item a,
        table.menu th.menu-item a {
            color: #2199e8; }

        table.menu.vertical td.menu-item,
        table.menu.vertical th.menu-item {
            padding: 10px;
            padding-right: 0;
            display: block; }
        table.menu.vertical td.menu-item a,
        table.menu.vertical th.menu-item a {
            width: 100%; }

        table.menu.vertical td.menu-item table.menu.vertical td.menu-item,
        table.menu.vertical td.menu-item table.menu.vertical th.menu-item,
        table.menu.vertical th.menu-item table.menu.vertical td.menu-item,
        table.menu.vertical th.menu-item table.menu.vertical th.menu-item {
            padding-left: 10px; }

        table.menu.text-center a {
            text-align: center; }

        .menu[align=\"center\"] {
            width: auto !important; }

        body.outlook p {
            display: inline !important; }

        @media only screen and (max-width: 596px) {
            table.body img {
                width: auto;
                height: auto; }
            table.body center {
                min-width: 0 !important; }
            table.body .container {
                width: 95% !important; }
            table.body .columns,
            table.body .column {
                height: auto !important;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding-left: 16px !important;
                padding-right: 16px !important; }
            table.body .columns .column,
            table.body .columns .columns,
            table.body .column .column,
            table.body .column .columns {
                padding-left: 0 !important;
                padding-right: 0 !important; }
            table.body .collapse .columns,
            table.body .collapse .column {
                padding-left: 0 !important;
                padding-right: 0 !important; }
            td.small-1,
            th.small-1 {
                display: inline-block !important;
                width: 8.33333% !important; }
            td.small-2,
            th.small-2 {
                display: inline-block !important;
                width: 16.66667% !important; }
            td.small-3,
            th.small-3 {
                display: inline-block !important;
                width: 25% !important; }
            td.small-4,
            th.small-4 {
                display: inline-block !important;
                width: 33.33333% !important; }
            td.small-5,
            th.small-5 {
                display: inline-block !important;
                width: 41.66667% !important; }
            td.small-6,
            th.small-6 {
                display: inline-block !important;
                width: 50% !important; }
            td.small-7,
            th.small-7 {
                display: inline-block !important;
                width: 58.33333% !important; }
            td.small-8,
            th.small-8 {
                display: inline-block !important;
                width: 66.66667% !important; }
            td.small-9,
            th.small-9 {
                display: inline-block !important;
                width: 75% !important; }
            td.small-10,
            th.small-10 {
                display: inline-block !important;
                width: 83.33333% !important; }
            td.small-11,
            th.small-11 {
                display: inline-block !important;
                width: 91.66667% !important; }
            td.small-12,
            th.small-12 {
                display: inline-block !important;
                width: 100% !important; }
            .columns td.small-12,
            .column td.small-12,
            .columns th.small-12,
            .column th.small-12 {
                display: block !important;
                width: 100% !important; }
            table.body td.small-offset-1,
            table.body th.small-offset-1 {
                margin-left: 8.33333% !important;
                Margin-left: 8.33333% !important; }
            table.body td.small-offset-2,
            table.body th.small-offset-2 {
                margin-left: 16.66667% !important;
                Margin-left: 16.66667% !important; }
            table.body td.small-offset-3,
            table.body th.small-offset-3 {
                margin-left: 25% !important;
                Margin-left: 25% !important; }
            table.body td.small-offset-4,
            table.body th.small-offset-4 {
                margin-left: 33.33333% !important;
                Margin-left: 33.33333% !important; }
            table.body td.small-offset-5,
            table.body th.small-offset-5 {
                margin-left: 41.66667% !important;
                Margin-left: 41.66667% !important; }
            table.body td.small-offset-6,
            table.body th.small-offset-6 {
                margin-left: 50% !important;
                Margin-left: 50% !important; }
            table.body td.small-offset-7,
            table.body th.small-offset-7 {
                margin-left: 58.33333% !important;
                Margin-left: 58.33333% !important; }
            table.body td.small-offset-8,
            table.body th.small-offset-8 {
                margin-left: 66.66667% !important;
                Margin-left: 66.66667% !important; }
            table.body td.small-offset-9,
            table.body th.small-offset-9 {
                margin-left: 75% !important;
                Margin-left: 75% !important; }
            table.body td.small-offset-10,
            table.body th.small-offset-10 {
                margin-left: 83.33333% !important;
                Margin-left: 83.33333% !important; }
            table.body td.small-offset-11,
            table.body th.small-offset-11 {
                margin-left: 91.66667% !important;
                Margin-left: 91.66667% !important; }
            table.body table.columns td.expander,
            table.body table.columns th.expander {
                display: none !important; }
            table.body .right-text-pad,
            table.body .text-pad-right {
                padding-left: 10px !important; }
            table.body .left-text-pad,
            table.body .text-pad-left {
                padding-right: 10px !important; }
            table.menu {
                width: 100% !important; }
            table.menu td,
            table.menu th {
                width: auto !important;
                display: inline-block !important; }
            table.menu.vertical td,
            table.menu.vertical th, table.menu.small-vertical td,
            table.menu.small-vertical th {
                display: block !important; }
            table.menu[align=\"center\"] {
                width: auto !important; }
            table.button.small-expand,
            table.button.small-expanded {
                width: 100% !important; }
            table.button.small-expand table,
            table.button.small-expanded table {
                width: 100%; }
            table.button.small-expand table a,
            table.button.small-expanded table a {
                text-align: center !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important; }
            table.button.small-expand center,
            table.button.small-expanded center {
                min-width: 0; } }

    </style>

    <style>
        .header {
            background: #fff;
        }

        .header .columns {
            padding-bottom: 0;
        }

        .header p {
            color: #fff;
            margin-bottom: 0;
        }

        .header .wrapper-inner {
            padding: 20px;
            /*controls the height of the header*/
        }

        .header .container {
            background: #8a8a8a;
        }

        .wrapper.secondary {
            background: #ffffff;
        }
    </style>
</head>

<body>
<!-- <style> -->
<table class=\"body\" data-made-with-foundation=\"\">
    <tr>
        <td class=\"float-center\" align=\"center\" valign=\"top\">
            <center data-parsed=\"\">
                <table align=\"center\" class=\"container float-center\">
                    <tbody>
                    <tr>
                        <td>
                            <table class=\"row collapse\">
                                <tbody>
                                <tr>
                                    <th class=\"small-12 large-12 columns\" valign=\"middle\">
                                        <table>
                                            <tr><th style=\"height: 30px\"></th></tr>
                                            <tr>
                                                <th style=\"text-align: center;\">
                                                    <img src=\"";
        // line 1408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\" style=\"width: 200px; margin: 0 auto\">
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                            <table class=\"spacer\">
                                <tbody>
                                <tr>
                                    <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class=\"row\">
                                <tbody>
                                <tr>
                                    <th class=\"small-12 large-12 columns first last\">
                                        <table>
                                            <tr><th style=\"height: 30px\"></th></tr>
                                            <tr>
                                                <th>
                                                    <h4 style=\"text-align: center; color: red; font-weight: bold\">Stornierung der Dienstfahrt</h4>
                                                </th>
                                            </tr>
                                            <tr><th style=\"height: 30px\"></th></tr>
                                            <tr>
                                                <th>
                                                    <table>
                                                        <th style=\"width: 120px\">
                                                            <b>Grund:</b>
                                                        </th>
                                                        <th>
                                                            ";
        // line 1442
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
                                                        </th>
                                                    </table>
                                                </th>
                                            </tr>
                                            <tr><th style=\"height: 15px\"></th></tr>
                                            <tr>
                                                <th>
                                                    ";
        // line 1450
        if ((($context["endingDate"] ?? null) != null)) {
            // line 1451
            echo "
                                                        <table>
                                                            <tr>
                                                                <th style=\"width: 120px\">
                                                                    <b>Datum von:</b>
                                                                </th>
                                                                <th>
                                                                    ";
            // line 1458
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["initialDate"] ?? null), "d.m.Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["initialTime"] ?? null), "html", null, true);
            echo "
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th style=\"width: 120px\">
                                                                    <b>Datum bis:</b>
                                                                </th>
                                                                <th>
                                                                    ";
            // line 1466
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["endingDate"] ?? null), "d.m.Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["endingTime"] ?? null), "html", null, true);
            echo "
                                                                </th>
                                                            </tr>
                                                        </table>

                                                    ";
        } else {
            // line 1472
            echo "
                                                        <table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1475
            if (((($context["initialTime"] ?? null) != null) && (($context["initialTime"] ?? null) == ($context["endingTime"] ?? null)))) {
                // line 1476
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 120px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Datum:</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1481
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["initialDate"] ?? null), "d.m.Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["initialTime"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (((            // line 1485
($context["initialTime"] ?? null) != null) && (($context["initialTime"] ?? null) != ($context["endingTime"] ?? null)))) {
                // line 1486
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 120px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Datum:</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1491
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["initialDate"] ?? null), "d.m.Y"), "html", null, true);
                echo " von ";
                echo twig_escape_filter($this->env, ($context["initialTime"] ?? null), "html", null, true);
                echo " bis ";
                echo twig_escape_filter($this->env, ($context["endingTime"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1495
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 120px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Datum:</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1500
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["initialDate"] ?? null), "d.m.Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1504
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        </table>

                                                    ";
        }
        // line 1508
        echo "                                                </th>
                                            </tr>
                                            <tr><th style=\"height: 15px\"></th></tr>
                                            <tr>
                                                <th>
                                                    <table style=\"width: 300px\">
                                                        <tr>
                                                            <th style=\"width: 120px\">
                                                                ";
        // line 1516
        if ((($context["firstName1"] ?? null) != null)) {
            // line 1517
            echo "
                                                                    <b>Teilnehmer:</b>

                                                                ";
        } else {
            // line 1521
            echo "
                                                                    <b>Teilnehmer:</b>

                                                                ";
        }
        // line 1525
        echo "                                                            </th>
                                                            <th style=\"width: 180px\">";
        // line 1526
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["lastName"] ?? null), "html", null, true);
        echo "</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th>
                                                                ";
        // line 1531
        if ((($context["firstName1"] ?? null) != null)) {
            // line 1532
            echo "
                                                                    ";
            // line 1533
            echo twig_escape_filter($this->env, ($context["firstName1"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName1"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1536
        echo "
                                                                ";
        // line 1537
        if ((($context["firstName2"] ?? null) != null)) {
            // line 1538
            echo "
                                                                    ";
            // line 1539
            echo twig_escape_filter($this->env, ($context["firstName2"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName2"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1542
        echo "
                                                                ";
        // line 1543
        if ((($context["firstName3"] ?? null) != null)) {
            // line 1544
            echo "
                                                                    ";
            // line 1545
            echo twig_escape_filter($this->env, ($context["firstName3"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName3"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1548
        echo "
                                                                ";
        // line 1549
        if ((($context["firstName4"] ?? null) != null)) {
            // line 1550
            echo "
                                                                    ";
            // line 1551
            echo twig_escape_filter($this->env, ($context["firstName4"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName4"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1554
        echo "
                                                                ";
        // line 1555
        if ((($context["firstName5"] ?? null) != null)) {
            // line 1556
            echo "
                                                                    ";
            // line 1557
            echo twig_escape_filter($this->env, ($context["firstName5"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName5"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1560
        echo "
                                                                ";
        // line 1561
        if ((($context["firstName6"] ?? null) != null)) {
            // line 1562
            echo "
                                                                    ";
            // line 1563
            echo twig_escape_filter($this->env, ($context["firstName6"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName6"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1566
        echo "
                                                                ";
        // line 1567
        if ((($context["firstName7"] ?? null) != null)) {
            // line 1568
            echo "
                                                                    ";
            // line 1569
            echo twig_escape_filter($this->env, ($context["firstName7"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName7"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1572
        echo "
                                                                ";
        // line 1573
        if ((($context["firstName8"] ?? null) != null)) {
            // line 1574
            echo "
                                                                    ";
            // line 1575
            echo twig_escape_filter($this->env, ($context["firstName8"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName8"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1578
        echo "                                                                ";
        if ((($context["firstName9"] ?? null) != null)) {
            // line 1579
            echo "
                                                                    ";
            // line 1580
            echo twig_escape_filter($this->env, ($context["firstName9"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName9"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1583
        echo "
                                                                ";
        // line 1584
        if ((($context["firstName10"] ?? null) != null)) {
            // line 1585
            echo "
                                                                    ";
            // line 1586
            echo twig_escape_filter($this->env, ($context["firstName10"] ?? null), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, ($context["lastName10"] ?? null), "html", null, true);
            echo "

                                                                ";
        }
        // line 1589
        echo "                                                            </th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                            <table class=\"wrapper secondary\" align=\"center\">
                                <tr>
                                    <td class=\"wrapper-inner\">
                                        <table class=\"spacer\">
                                            <tbody>
                                            <tr>
                                                <td height=\"16px\" style=\"font-size:16px;line-height:16px;\">&#xA0;</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class=\"row\">
                                            <tbody>
                                            <tr>
                                                <th class=\"small-12 large-12 columns first\">
                                                    <table>
                                                        <tr><th style=\"height: 50px\"></th></tr>
                                                        <tr>
                                                            <th>
                                                                <p>Mit freundlichen Grüßen <br>
                                                                    ";
        // line 1618
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["lastName"] ?? null), "html", null, true);
        echo " <br>
                                                                    <a href=\"mailto:";
        // line 1619
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</a>
                                                                </p>
                                                            </th>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return ":Emails:delete_trip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1803 => 1619,  1797 => 1618,  1766 => 1589,  1758 => 1586,  1755 => 1585,  1753 => 1584,  1750 => 1583,  1742 => 1580,  1739 => 1579,  1736 => 1578,  1728 => 1575,  1725 => 1574,  1723 => 1573,  1720 => 1572,  1712 => 1569,  1709 => 1568,  1707 => 1567,  1704 => 1566,  1696 => 1563,  1693 => 1562,  1691 => 1561,  1688 => 1560,  1680 => 1557,  1677 => 1556,  1675 => 1555,  1672 => 1554,  1664 => 1551,  1661 => 1550,  1659 => 1549,  1656 => 1548,  1648 => 1545,  1645 => 1544,  1643 => 1543,  1640 => 1542,  1632 => 1539,  1629 => 1538,  1627 => 1537,  1624 => 1536,  1616 => 1533,  1613 => 1532,  1611 => 1531,  1601 => 1526,  1598 => 1525,  1592 => 1521,  1586 => 1517,  1584 => 1516,  1574 => 1508,  1568 => 1504,  1561 => 1500,  1554 => 1495,  1543 => 1491,  1536 => 1486,  1534 => 1485,  1525 => 1481,  1518 => 1476,  1516 => 1475,  1511 => 1472,  1500 => 1466,  1487 => 1458,  1478 => 1451,  1476 => 1450,  1465 => 1442,  1428 => 1408,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:delete_trip.html.twig", "/var/www/html/portal/app/Resources/views/Emails/delete_trip.html.twig");
    }
}
