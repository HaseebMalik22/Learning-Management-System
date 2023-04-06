<?php

class __Mustache_0674d6424c0ce00cd81d3c706f677ba1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $value = $context->find('userpicture');
        $buffer .= $this->section6030ac0b4f85e0cc8559cf5b0d920d2a($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="w-100 no-overflow">
';
        $buffer .= $indent . '    <div class="myprofileitem fullname">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('userfullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('usercountry');
        $buffer .= $this->section73bf9d3d70327117b2a29c56be853d23($context, $indent, $value);
        $value = $context->find('usercity');
        $buffer .= $this->sectionE9a5bc5f5e311ac6a5f221dcd3ea2fba($context, $indent, $value);
        $value = $context->find('useremail');
        $buffer .= $this->sectionDf3e7f5d013b0d874df9d23d3b344685($context, $indent, $value);
        $value = $context->find('userphone1');
        $buffer .= $this->section505b26fe9e696342f6675e0ed60b1699($context, $indent, $value);
        $value = $context->find('userphone2');
        $buffer .= $this->sectionFe4fe7758f3d7f25506d91d44c5205f8($context, $indent, $value);
        $value = $context->find('userinstitution');
        $buffer .= $this->sectionE1fb53cab50b70f268e34f08f452ef77($context, $indent, $value);
        $value = $context->find('useraddress');
        $buffer .= $this->section5ace18867890fe63b16aa3d3f3274343($context, $indent, $value);
        $value = $context->find('useridnumber');
        $buffer .= $this->sectionC58afabc0d1af5297020d074fbdaa57f($context, $indent, $value);
        $value = $context->find('userfirstaccess');
        $buffer .= $this->sectionC66024bd553eb8a56a0cd27228dbc975($context, $indent, $value);
        $value = $context->find('userlastaccess');
        $buffer .= $this->sectionBae3b4abc6c28240ec5e7aef989bfc8c($context, $indent, $value);
        $value = $context->find('usercurrentlogin');
        $buffer .= $this->section2abe09169a25591c2ad1de8dca2443ce($context, $indent, $value);
        $value = $context->find('userlastlogin');
        $buffer .= $this->section8d57ca822eb20e54fbe81e1bd92ecc66($context, $indent, $value);
        $value = $context->find('userlastip');
        $buffer .= $this->sectionBd0a5226fed77c4ad3285a945c375ead($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6030ac0b4f85e0cc8559cf5b0d920d2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem picture">
        {{{ userpicture }}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem picture">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('userpicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97a9cb37703d1b07a4c5b12c97e4379d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' country ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' country ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bf9d3d70327117b2a29c56be853d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem country">
        <span>{{#str}} country {{/str}}:</span>
        {{ usercountry }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem country">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('str');
                $buffer .= $this->section97a9cb37703d1b07a4c5b12c97e4379d($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('usercountry'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e1f9163291c7479f617c8b66d8cd0f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' city ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' city ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9a5bc5f5e311ac6a5f221dcd3ea2fba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem city">
         <span>{{#str}} city {{/str}}:</span>
         {{ usercity }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem city">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section0e1f9163291c7479f617c8b66d8cd0f6($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('usercity'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17d49b3992af544a6558a814b9256e30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' email ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' email ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf3e7f5d013b0d874df9d23d3b344685(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="myprofileitem city">
             <span>{{#str}} email {{/str}}:</span>
             {{{ useremail }}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="myprofileitem city">
';
                $buffer .= $indent . '             <span>';
                $value = $context->find('str');
                $buffer .= $this->section17d49b3992af544a6558a814b9256e30($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '             ';
                $value = $this->resolveValue($context->find('useremail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section185ba465581477103fba6da79ca40700(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' phone1 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' phone1 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section505b26fe9e696342f6675e0ed60b1699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem phone1">
         <span>{{#str}} phone1 {{/str}}:</span>
         {{ userphone1 }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem phone1">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section185ba465581477103fba6da79ca40700($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userphone1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09b6eee4adc43df8046d64a679226adf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' phone2 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' phone2 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe4fe7758f3d7f25506d91d44c5205f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem phone2">
         <span>{{#str}} phone2 {{/str}}:</span>
         {{ userphone2 }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem phone2">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section09b6eee4adc43df8046d64a679226adf($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userphone2'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b3b4e5d01b28b2f9a215b4d2999a5c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' institution ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' institution ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1fb53cab50b70f268e34f08f452ef77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem institution">
        <span>{{#str}} institution {{/str}}:</span>
        {{ userinstitution }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem institution">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('str');
                $buffer .= $this->section3b3b4e5d01b28b2f9a215b4d2999a5c6($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('userinstitution'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40f7c7c618488969039da0f0ec8ee1e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' address ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' address ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ace18867890fe63b16aa3d3f3274343(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem address">
        <span>{{#str}} address {{/str}}:</span>
        {{ useraddress }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem address">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('str');
                $buffer .= $this->section40f7c7c618488969039da0f0ec8ee1e1($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('useraddress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA356a4dce02b13c3e31c7c016e4e20c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' idnumber ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' idnumber ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC58afabc0d1af5297020d074fbdaa57f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem idnumber">
        <span>{{#str}} idnumber {{/str}}:</span>
        {{{ useridnumber }}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem idnumber">
';
                $buffer .= $indent . '        <span>';
                $value = $context->find('str');
                $buffer .= $this->sectionA356a4dce02b13c3e31c7c016e4e20c8($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('useridnumber'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9caac5d4ddba1e45cbc4e0869b8989fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firstaccess ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' firstaccess ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC66024bd553eb8a56a0cd27228dbc975(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem firstaccess">
         <span>{{#str}} firstaccess {{/str}}: </span>
         {{ userfirstaccess }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem firstaccess">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section9caac5d4ddba1e45cbc4e0869b8989fa($context, $indent, $value);
                $buffer .= ': </span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userfirstaccess'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49d45e02866eb9b1501776eac9b2e1d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccess ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastaccess ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBae3b4abc6c28240ec5e7aef989bfc8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem lastaccess">
         <span>{{#str}} lastaccess {{/str}}:</span>
         {{ userlastaccess }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem lastaccess">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section49d45e02866eb9b1501776eac9b2e1d4($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userlastaccess'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40ab32d843ea367ab8a69a6ea2e65476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' login ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2abe09169a25591c2ad1de8dca2443ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem currentlogin">
         <span>{{#str}} login {{/str}}:</span>
         {{ usercurrentlogin }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem currentlogin">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section40ab32d843ea367ab8a69a6ea2e65476($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('usercurrentlogin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18cec3def2133747e820158e4d59b95c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastlogin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastlogin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d57ca822eb20e54fbe81e1bd92ecc66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem lastlogin">
         <span>{{#str}} lastlogin {{/str}}:</span>
         {{ userlastlogin }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem lastlogin">
';
                $buffer .= $indent . '         <span>';
                $value = $context->find('str');
                $buffer .= $this->section18cec3def2133747e820158e4d59b95c($context, $indent, $value);
                $buffer .= ':</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userlastlogin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd0a5226fed77c4ad3285a945c375ead(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="myprofileitem lastip">
         <span>IP:</span>
         {{ userlastip }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="myprofileitem lastip">
';
                $buffer .= $indent . '         <span>IP:</span>
';
                $buffer .= $indent . '         ';
                $value = $this->resolveValue($context->find('userlastip'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
