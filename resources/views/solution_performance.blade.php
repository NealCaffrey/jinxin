@extends('layouts.default')

@section('content')
    <div id="about">
        <section class="heading section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 title">
                        <h1>高性能解决方案</h1>
                    </div>
                    <div class="col-lg-8 col-sm-12 desc">
                        <p>
                            目前在高性能计算平台的选择上，主流的有对多处理器和PC服务器集群两种架构选择，前者可以满足大多数应用程序的运行需求，
                            但是价格相对较高，对于经费有限的用户，难于满足对计算能力的需求 后者需要应用具有良好的可扩展性，而且由于单节点的内存大小受到限制，
                            对于某些对内存数量需求大的应用来说需要增加很多通信开销，降低了处理效率。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="industry section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <h2>稳定性</h2>
                        <p>建立统一高效的资源管理系统，对所有计算机系统资源进行统一监控与管理，以集中统一的管理方式，高效率、反应灵敏的技术服务机制，标准化、自动化的管理流程达到提供优质的资源管理服务，确保整体系统稳定、高效、连续地运营，能够支持全天24 小时的连续运行需求</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 img">
                        <img src="/images/p1.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="case section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <h2>开放性</h2>
                        <p>系统方案采用开放标准，开放结构，开放系统组件和开放用户接口。充分满足用户投资保护和业务扩展、系统维护等方面的需求</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 img">
                        <img src="/images/p2.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="industry section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <h2>灵活性</h2>
                        <p>根据用户对解决大问题和同时运行多个中小型任务的综合需求，优化系统资源配置比例，实现更大的应用灵活性。</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 img">
                        <img src="/images/p3.png">
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
