+++
title = "Building Windows Phone apps with FAKE"
author = "Igor Kulman"
date = "2014-03-31"
url = "/building-windows-phone-apps-with-fake/"
categories = ["Windows Phone"]
tags = ["Fsharp","FAKE","Windows Phone"]
+++
[FAKE][1] is a build automation system with capabilities which are similar to make and rake. It is using an easy domain-specific language (DSL) so that you can start using it without learning F#. If you need more than the default functionality you can either write F# or simply reference .NET assemblies.

I have been using FAKE for quite some time now on some fairly complex projects for not only building but also running tests and creating and pushing Nuget packages and I really like. I decided to add FAKE build scripts to my Windows Phone apps to make the process of generating a XAP file for the Windows Phone Store easier. 

The FAKE script I use can by used with any Windows Phone app, it will build all the projects and copy the XAP file to a release directory.

<!--more-->

<div data-gist="9842235" data-file="build.fsx"></div>

To get the script started, you need a batch file

<div data-gist="9842235" data-file="build.bat"></div>

and Nuget.exe in tools\NuGet directory.

 [1]: http://fsharp.github.io/FAKE/
