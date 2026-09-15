<?php

declare(strict_types=1);

namespace MirayS\Onix\Product;

use MirayS\Onix\CodeList\CodeList92;

class AgentIdentifier
{
    private ?CodeList92 $AgentIDType = null;

    private ?string $IDTypeName = null;

    private ?string $IDValue = null;

    public function setAgentIDType(CodeList92 $agentIDType): static
    {
        $this->AgentIDType = $agentIDType;

        return $this;
    }

    public function getAgentIDType(): ?CodeList92
    {
        return $this->AgentIDType;
    }

    public function setIDTypeName(string $iDTypeName): static
    {
        $this->IDTypeName = $iDTypeName;

        return $this;
    }

    public function getIDTypeName(): ?string
    {
        return $this->IDTypeName;
    }

    public function setIDValue(string $iDValue): static
    {
        $this->IDValue = $iDValue;

        return $this;
    }

    public function getIDValue(): ?string
    {
        return $this->IDValue;
    }
}
